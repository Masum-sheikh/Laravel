<?php

use App\Http\Controllers\Blog\AuthorController;
// use App\Http\Controllers\blog\BlogDashboardController as BlogBlogDashboardController;
use App\Http\Controllers\blog\BlogBlogDashboardController;
use App\Http\Controllers\Dashboard\BlogDashboardController;
use App\Http\Controllers\Blog\BlogSignInController;
use App\Http\Controllers\Blog\BlogSignUpController;
use App\Http\Controllers\Blog\BlogHomeController;
use App\Http\Controllers\blog\BlogSignOutController;
use App\Http\Controllers\Blog\CommentsController;
use App\Http\Controllers\blog\ForgotPassword;
use App\Http\Controllers\CkEditorController;
use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\DashboardAuthorController;
use App\Http\Controllers\dashboard\DashboardBlogUsersController;
use App\Http\Controllers\Dashboard\DashboardHomeController;
use App\Http\Controllers\dashboard\SubscribeController;
use App\Http\Controllers\Dashboard\TagsController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleManagementController;
use Illuminate\Support\Facades\Route;

// Blog Home
Route::get("/", [BlogHomeController::class, "blogHome"])->name("blogHome");

// Post Details
Route::get("/blog/post/details/{slug}", [BlogHomeController::class, "postDetails"])->name("postDetails");

// Category Wise Post
Route::get("blog/posts/{categoryId}", [BlogHomeController::class, "categoryPosts"])->name("categoryPosts");
Route::get("blog/posts/{id}", [BlogHomeController::class, "categoryPosts"])->name("categoryPosts");

// Typhography
Route::get("/blog/typography", [BlogHomeController::class, "typography"])->name("typography");

// About
Route::get("/blog/about", [BlogHomeController::class, "about"])->name("about");

// Contact
Route::get("/blog/contact", [BlogHomeController::class, "contact"])->name("contact");

// Authors
Route::get("/blog/authors", [BlogHomeController::class, "authors"])->name("authors");
Route::get("/blog/author/{id}", [BlogHomeController::class, "author"])->name("author");

// Blog Sign Up
Route::get("/blog/signup", [BlogSignUpController::class, "blogSignUp"])->name("blogSignUp");
Route::post("/blog/signup", [BlogSignUpController::class, "blogSignUpData"])->name("blogSignUpData");

// Mail Verify
Route::get("/blog/mail/verify/{token}", [BlogSignUpController::class, "verifyMail"])->name("verifyMail");


// Blog Sign In
Route::get("/blog/signin", [BlogSignInController::class, "blogSignIn"])->name("blogSignIn");
Route::post("/blog/signin", [BlogSignInController::class, "blogSignInData"])->name("blogSignInData");

// Forgot Password
Route::get("/forgot/password", [ForgotPassword::class, "forgotPassword"])->name("forgotPassword");
Route::post("/forgot/password", [ForgotPassword::class, "forgotPasswordEmail"])->name("forgotPasswordEmail");
Route::get("/forgot/password/form/{token}", [ForgotPassword::class, "forgotPasswordForm"])->name("forgotPasswordForm");
Route::post("/forgot/password/form/data/{token}", [ForgotPassword::class, "resetPasswordData"])->name("resetPasswordData");



// blogSignOut
Route::get("blog/signout", [BlogSignOutController::class, "blogSignOut"])->name("blogSignOut");


Route::middleware('blog')->group(function () {
    // requestForAuthor
    Route::get("/blog/form/author", [AuthorController::class, "requestForAuthor"])->name("requestForAuthor"); // m
    Route::post("/blog/form/author", [AuthorController::class, "requestForAuthorData"])->name("requestForAuthorData"); // m

    // Blog User Dashboard
    Route::get("/blog/dashboard", [BlogBlogDashboardController::class, "blogUserDashboard"])->name("blogUserDashboard");
    Route::get("/blog/dashboard/post", [BlogBlogDashboardController::class, "userNewPost"])->name("userNewPost");
    Route::post("/blog/dashborad/post/data", [BlogBlogDashboardController::class, "userPostData"])->name("userPostData");
    Route::get("/blog/dashboard/post/list", [BlogBlogDashboardController::class, "userPostList"])->name("userPostList");
    Route::get("/blog/dashboard/{username}/profile", [BlogBlogDashboardController::class, "blogUserProfile"])->name("blogUserProfile");

    Route::post("/blog/dashboard/{username}/profile/information", [BlogBlogDashboardController::class, "personalInformation"])->name("personalInformation");

    Route::post("/blog/dashboard/{username}/profile/password", [BlogBlogDashboardController::class, "changePasswordData"])->name("changePasswordData");

    Route::post("/blog/dashboard/{username}/profile/photo", [BlogBlogDashboardController::class, "photoData"])->name("photoData");
});

// Subscribe
Route::post("/dashborad/subscribe", [SubscribeController::class, "subscribe"])->name("subscribe");

// Comment
Route::post("/post/comment", [CommentsController::class, "commentData"])->name("commentData");






// Admin Dashboard
Route::get("/dashboard/admin", [DashboardHomeController::class, "dashboardHome"])->middleware(['auth', 'verified'])->name("dashboardHome");

Route::middleware('auth')->group(function () {
    // For Dashboard

    // Blog User List
    Route::get("dashboard/blog/user/list", [DashboardBlogUsersController::class, "blogUserList"])->name("blogUserList");
    Route::get("dashboard/blog/user/delte/{id}", [DashboardBlogUsersController::class, "blogUserDelete"])->name("blogUserDelete");

    // Author List
    Route::get("/dashboard/author/list", [DashboardAuthorController::class, "authorList"])->name("authorList");
    Route::get("/dashboard/author/deactive/{id}", [DashboardAuthorController::class, "authorDeactive"])->name("authorDeactive");

    // Author Requests
    Route::get("/dashboard/author/requests", [DashboardAuthorController::class, "authorRequests"])->name("authorRequests");
    Route::get("/dashboard/author/requests/approve/{id}", [DashboardAuthorController::class, "authorRequestApproved"])->name("authorRequestApproved");
    Route::get("/dashboard/author/requests/delete/{id}", [DashboardAuthorController::class, "authorRequestDelete"])->name("authorRequestDelete");

    // Category
    Route::get("/dashboard/categories", [CategoriesController::class, "categories"])->name("categories");
    Route::post("/dashboard/categories", [CategoriesController::class, "categoryData"])->name("categoryData");
    Route::get("/dashboard/categories/{id}", [CategoriesController::class, "categoryDelete"])->name("categoryDelete");

    // Tags
    Route::get("/dashboard/tags", [TagsController::class, "tags"])->name("tags");
    Route::post("/dashboard/tags", [TagsController::class, "tagsData"])->name("tagsData");
    Route::get("/dashboard/tags/{id}", [TagsController::class, "tagDelete"])->name("tagDelete");

    // Users
    Route::get("/users", [UsersController::class, "users"])->name("users1");
    Route::get("/dashboard/user/profile", [UsersController::class, "profile"])->name("profile");

    // Blog Dashboard
    Route::get("/dashboard/blog", [BlogDashboardController::class, "blogDashboard"])->name("blogDashboard");

    //Ck Editor
    Route::post("/dashboard/blog/post/editor", [CkEditorController::class, "ckEditorUploads"])->name("ckEditorUploads");

    // Post
    Route::get("/dashboard/blog/post", [BlogDashboardController::class, "newPost"])->name("newPost");
    Route::post("/dashboard/blog/post", [BlogDashboardController::class, "postData"])->name("postData");

    // Post List
    Route::get("dashboard/blog/post/Llst", [BlogDashboardController::class, "postList"])->name("postList");
    Route::get("/dashboard/blog/post/approve/{id}", [BlogDashboardController::class, "postApprove"])->name("postApprove");
    Route::get("/dashboard/blog/post/archive/{id}", [BlogDashboardController::class, "postArchive"])->name("postArchive");

    // Subscribers
    Route::get("/dashboard/blog/subscribers", [SubscribeController::class, "subscribers"])->name("subscribers");
    Route::get("/send/newsletter/{id}", [SubscribeController::class, "sendNewsLetter"])->name("sendNewsLetter");

    // Role Management
    Route::get("dashboard/role/management/permissions", [RoleManagementController::class, "permissions"])->name("permissions");
    Route::post("dashboard/role/management/permission/data", [RoleManagementController::class, "permissionData"])->name("permissionData");
    Route::get("/dashboard/role/management/permission/delete/{id}", [RoleManagementController::class, "permissionDelete"])->name("permissionDelete");

    Route::get("dashboard/role/management/roles", [RoleManagementController::class, "roles"])->name("roles");
    Route::post("dashboard/role/management/role/data", [RoleManagementController::class, "roleData"])->name("roleData");
    Route::get("dashboard/role/management/role/delete/{id}", [RoleManagementController::class, "roleDelete"])->name("roleDelete");

    Route::get("dashboard/role/management/users", [RoleManagementController::class, "users"])->name("users");
    Route::post("dashboard/role/management/users/data", [RoleManagementController::class, "userData"])->name("userData");
    Route::get("dashboard/role/management/users/remove/role/{id}", [RoleManagementController::class, "removeRole"])->name("removeRole");


    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
