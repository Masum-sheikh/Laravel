<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class CategoriesController extends Controller
{
    function categories() // View
    {
        // $categories = Category::all();
        $categories = Category::orderBy("categoryName")->paginate(6);
        // $categories = Category::simplePaginate(4);
        return view("dashboard.categories", compact("categories"));
    } // End Method
    function categoryData(Request $request) // Form Validate & Data Insert
    {
        $request->validate(
            [
                "categoryName" => ["required", "string", "unique:Categories"],
                "details" => [],
                "categoryImage" => ["required", "image", 'mimes:jpg,jpeg,png,webp', 'max:1024']
            ],
            [
                "categoryName.required" => "Please Enter Category Name.",
                // "categoryImage.required" => "Please Select an Image.",
                // "categoryImage.mimes" => "",
                // "categoryImage.max" => ""
            ]
        );

        // $iamge = $request->category_image;
        // $extension = $iamge->extension();
        // $fileName = Str::lower(str_replace(" ", "_", $request->category_name))."_".random_int(10000, 99999).".".$extension;
        // Image::make($iamge)->save(public_path("uploads/category/".$fileName));
        // Category::insert([
        //     "category_name"=>$request->category_name,
        //     "category_image"=>$fileName,
        //     "created_at"=>Carbon::now(),
        // ]);

        // Category Image
        $categoryImage = $request->categoryImage;
        $extension = $categoryImage->extension();
        $imageName = strtolower(str_replace(" ", "_", $request->categoryName)) . "." . $extension;
        Image::make($categoryImage)->save(public_path("uploads/categories/" . $imageName));

        // Data Insert
        Category::insert([
            "userId" => Auth::id(),
            "categoryName" => $request->categoryName,
            "details" => $request->details,
            "categoryImage" => $imageName,
            "created_at" => Carbon::now()
        ]);
        return back()->with("Done", "The '{$request->categoryName}' category was successfully added.");
    } // End Method
    function categoryDelete($id)
    {
        $category = Category::find($id);
        $deleteFrom = public_path("uploads/categories/" . $category->categoryImage);
        unlink($deleteFrom);
        $category->delete();

        return back()->with("Delete", "The '{$category->categoryName}' category was successfully deleted.");
    } // End Method
}
