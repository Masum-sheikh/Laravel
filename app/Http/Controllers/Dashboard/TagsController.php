<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    function tags(){
        $tags = Tag::orderBy("tagName")->paginate(10);
        return view("dashboard.tags", compact("tags"));
    } // End Method

    function tagsData(Request $request)
    {
        $request->validate([
            "tagName" => ["required", "string", "unique:Tags"]
        ]);

        // Data Insert
        Tag::insert([
            "tagName" => $request->tagName,
        ]);
        return back()->with("Done", "The '{$request->tagName}' tag was successfully added.");
    } // End Method
    function tagDelete($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        return back()->with("Delete", "The '{$tag->tagName}' tag was successfully deleted.");
    }
}
