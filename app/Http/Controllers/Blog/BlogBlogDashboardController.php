<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\blog_user;
use App\Models\Category;
use App\Models\Tag;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogBlogDashboardController extends Controller
{
    function blogUserDashboard()
    {
        return view("blog.blogDashboard.blogDashboard");
    } // End Method
    function userNewPost()
    {
        $categories = Category::orderBy("categoryName")->get();
        $tags = Tag::orderBy("tagName")->get();
        return view("blog.blogDashboard.newPost", [
            "categories" => $categories,
            "tags" => $tags,
        ]);
    } // End Method
    function userPostData(PostRequest $request)
    {
        // Cover Image
        $coverImage = $request->coverImage;
        $coverImageExtension = $coverImage->extension();
        $coverImageName = "cover_" . strtolower(str_replace(" ", "_", substr($request->title, 0, 8))) ."_". random_int(999, 9999) . "." . $coverImageExtension;
        Image::make($coverImage)->save(public_path("uploads/post/coverImage/" . $coverImageName));

        // Thumbnail
        $thumbnail = $request->thumbnail;
        $thumbnailExtension = $thumbnail->extension();
        $thumbnailName = "thumb_" . substr(str_replace(" ", "_", strtolower($request->title)), 0, 8) ."_". random_int(999, 9999) . "." . $thumbnailExtension;
        Image::make($thumbnail)->save(public_path("uploads/post/thumbnail/" . $thumbnailName));

        // Slug
        $slug = str_replace(" ", "_", strtolower(substr($request->title, 0, 20)))."_".random_int(200000, 999999).uniqid();

        // Tag
        $afterImplodeTags = implode(",", $request->tags);

        //Data Insert
        Post::insert([
            "authorId" => Auth::guard('author')->id(),
            "categoryId" => $request->categoryName,
            "title" => $request->title,
            "details" => $request->details,
            "coverImage" => $coverImageName,
            "thumbnail" => $thumbnailName,
            "tags" => $afterImplodeTags,
            "slug" => $slug,
            "created_at" => Carbon::now()
        ]);

        return back()->with("Done", "Post Added Successfully.");

    } // End Method
    function userPostList()
    {
        $posts = Post::where('authorId', Auth::guard("author")->id())->get();
        return view("blog.blogDashboard.postList", compact("posts"));
    } // End Method
    function blogUserProfile(){
        return view("blog.blogDashboard.userProfile");
    } // End Method
    function personalInformation(Request $request)
    {
        $request->validate([
            "username" => "string|min:8|max:20",
            "name" => "",
            "email" => "email",
        ]);
        // return $request->all();

        blog_user::find(Auth::guard("author")->user()->id)->update([
            "username" => $request->username,
            "name" => $request->name,
            "email" => $request->email,
        ]);
        return back()->with("saved", "Change Successfully.");
    } // End Method
    function changePasswordData(Request $request)
    {
        $request->validate([
            "currentPassword" => "required",
            "newPassword" => "required",
            "confirmPassword" => "required",
        ]);




    } // End Method
    function photoData(Request $request, $username)
    {
        $request->validate([
            "photo" => ["required", "image", 'mimes:jpg,jpeg,png,webp', 'max:1024'],
        ]);

        if(Auth::guard('author')->user()->image != null){
            $current = public_path('uploads/user/profile/'.Auth::guard('author')->user()->image);
            unlink($current);

            // Photo
            $profilePhoto = $request->photo;
            $extension = $profilePhoto->extension();
            $photoName = strtolower(Auth::guard("author")->user()->name).".".$extension;
            // $userId = Auth::guard("author")->id();
            // return $userId;
            Image::make($profilePhoto)->save(public_path("uploads/user/profile/".$photoName));

            blog_user::find(Auth::guard("author")->id())->update([
                "image" => $photoName,
            ]);
            return back()->with("done", "Change Successfully.");
        }else{
            // Photo
            $profilePhoto = $request->photo;
            $extension = $profilePhoto->extension();
            $photoName = strtolower(Auth::guard("author")->user()->name).".".$extension;
            Image::make($profilePhoto)->save(public_path("uploads/user/profile/".$photoName));
            blog_user::find(Auth::guard("author")->id())->update([
                "image" => $photoName,
            ]);
            return back()->with("done", "Change Successfully.");
        }
    } // End Method
}
