<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\popularPost;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BlogDashboardController extends Controller
{
    function blogDashboard()
    {
        return view("dashboard.blog.blogDashboard");
    } // End Method
    function newPost()
    {
        $categories = Category::orderBy("categoryName")->get();
        $tags = Tag::orderBy("tagName")->get();
        return view("dashboard.blog.newPost", [
            "categories" => $categories,
            "tags" => $tags,
        ]);
    } // End Method
    function postData(PostRequest $request)
    {
        // Cover Image
        $coverImage = $request->coverImage;
        $coverImageExtension = $coverImage->extension();
        $coverImageName = "cover_" . strtolower(str_replace(" ", "_", substr($request->title, 0, 8))) . "_" . random_int(999, 9999) . "." . $coverImageExtension;
        Image::make($coverImage)->save(public_path("uploads/post/coverImage/" . $coverImageName));

        // Thumbnail
        $thumbnail = $request->thumbnail;
        $thumbnailExtension = $thumbnail->extension();
        $thumbnailName = "thumb_" . substr(str_replace(" ", "_", strtolower($request->title)), 0, 8) . "_" . random_int(999, 9999) . "." . $thumbnailExtension;
        Image::make($thumbnail)->save(public_path("uploads/post/thumbnail/" . $thumbnailName));

        // Slug
        $slug = str_replace(" ", "_", strtolower(substr($request->title, 0, 20))) . "_" . random_int(200000, 999999) . uniqid();

        // Tag
        $afterImplodeTags = implode(",", $request->tags);

        //Data Insert
        Post::insert([
            "authorId" => Auth::id(),
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

    function postList()
    {
        $posts = Post::orderBy('status', 'asc')->latest()->paginate(6);
        return view("dashboard.blog.postList", [
            "posts" => $posts,
        ]);
    } // End Method

    function postApprove($id)
    {
        if (popularPost::where("postId", $id)->exists()) {

            Post::find($id)->update([
                "status" => 1,
            ]);
            
            $post = popularPost::where("postId", $id)->first();
            popularPost::find($post->id)->update([
                "status" => 1,
            ]);
            return back()->with("Approved", "Post Approved.");
        } else {
            Post::find($id)->update([
                "status" => 1,
            ]);
            return back()->with("Approved", "Post Approved.");
        }
    } // End Method

    function postArchive($id)
    {
        Post::find($id)->update([
            "status" => null,
        ]);

        $post = popularPost::where("postId", $id)->first();
        popularPost::find($post->id)->update([
            "status" => null,
        ]);
        return back()->with("Archived", "Post Archived.");
    }
}
