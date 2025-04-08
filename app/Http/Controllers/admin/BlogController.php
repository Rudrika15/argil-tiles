<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        // $blogs = Blog::whereIn('status', ['publish'])->get();        ;
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            // store image in public folder (blogimage folder)
            $imageName = $image->getClientOriginalName();

            $image->move(public_path('blogimage/'), $imageName);



        $blogs = new Blog();
        $blogs->title = $request->title;
        $blogs->slug = $request->slug;
        $blogs->description = $request->description;
        $blogs->image = $imageName;
        $blogs->save();
        return redirect()->route('blog')->with('msg', 'Record Inserted Successfully');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs =Blog::find($id);
        return view('admin.blog.edit',compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blogs = Blog::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // store image in public folder (blogimage folder)
            $imageName = $image->getClientOriginalName();

            $image->move(public_path('blogimage/'), $imageName);
            $blogs->image = $imageName;
        }

        $blogs->title = $request->title;
        $blogs->slug = $request->slug;
        $blogs->description = $request->description;
        $blogs->save();
        return redirect()->route('blog')->with('msg', 'Record Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogs = Blog::find($id);
        $blogs->delete();
        return redirect()->route('blog')->with('msg', 'Data Delete Successfully');
    }
}
