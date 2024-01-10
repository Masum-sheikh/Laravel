<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\blog_user;
use App\Models\Comment;
use App\Models\popularPost;
use Carbon\Carbon;

class BlogHomeController extends Controller
{
    function blogHome() // View
    {
        $categories = Category::orderBy("categoryName")->get(); // For Bottom
        $categories = Category::orderBy("categoryName")->get(); // For Nav
        // $posts = Post::all();
        // $posts = Post::where("status", 1)->latest()->take(4)->get(); // For Slider
        $posts = Post::where("authorId", 1)->where("status", 1)->latest()->take(4)->get(); // For Slider
        $latestPosts = Post::where("status", 1)->latest()->paginate(6); // For Latest
        $popularPost = popularPost::where("status", 1)->orderBy('totalRead', 'desc')->take(4)->get();   // Popular Post
        $comments = Comment::latest()->take(3)->get();
        return view("blog.index", [
            "categories" => $categories,
            "posts" => $posts,
            "latestPosts" => $latestPosts,
            "popularPost" => $popularPost,
            "comments" => $comments,
        ]);
    } // End Method
    function postDetails($slug){
        $post = Post::where("slug", $slug)->first();
        $postDetails = Post::find($post->id);
        $comments = Comment::with("replies")->where("postId", $post->id)->whereNull('parentId')->get();

        if(popularPost::where('postId', $post->id)->exists()){
            popularPost::where('postId', $post->id)->increment("totalRead", 1);
        }else{
            popularPost::insert([
                "postId" => $post->id,
                "totalRead" => 1,
                "status" => 1,
                "created_at" => Carbon::now()
            ]);
        }
        $totalviews = popularPost::where("postId", $post->id)->first()->totalRead;
        return view("blog.postDetails", [
            "totalviews" => $totalviews,
            "postDetails" => $postDetails,
            "comments" => $comments,
        ]);

    } // End Function
    // function categoryPosts($categoryId){
    //     $category = Post::where("categoryId", $categoryId)->get();
    //     return $category;
    //     die();
    //     // $categoryPosts = Post::find($category->id);
    //     return view("blog.categoryPosts", compact("categoryPosts"));
    // }
    function categoryPosts($categoryId){
        $category = Category::where("id", $categoryId)->first();
        $categoryPosts = Post::where("categoryId", $category->id)->where("status", 1)->paginate(4);
        // return $categoryPosts;
        // die();
        // $categoryPosts = Post::find($category->id);
        return view("blog.categoryPosts", [
            "category" => $category,
            "categoryPosts" => $categoryPosts,
        ]);
    } // End Method
    function typography()
    {
        return view("blog.typography");
    } // End Method
    function about()
    {
        return view("blog.about");
    } // End Method
    function contact()
    {
        return view("blog.contact");
    } // End Method
    function authors()
    {
        $authors = blog_user::where("authorStatus", 1)->get();
        return view("blog.authors", compact("authors"));
    } // End Method
    function author($id)
    {
        $author = blog_user::find($id);
        return view("blog.author", compact("author"));
    }
}
