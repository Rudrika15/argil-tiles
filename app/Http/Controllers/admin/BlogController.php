<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\MetaPropertyBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $blogs = Blog::orderBy('id', 'desc')->get();
    return view('admin.blog.index', compact('blogs'));
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
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required',
            'slug' => 'nullable|unique:blogs,slug',
            'author'=>'required'
        ]
        );

        $imageName = null;
        // return $request;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // store image in public folder (blogimage folder)
           $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('blogimage/'), $imageName);

        }

        $blogs = new Blog();
        $blogs->title = $request->title;
        $blogs->slug = $request->slug ?? Str::slug($request->title);
        // $blogs->slug = $request->slug;
        $blogs->description = $request->description;
        $blogs->image = $imageName;
        $blogs->status = $request->status;
        $blogs->save();

        $ogImageName = null;
    if ($request->hasFile('ogImage')) {
        $image = $request->file('ogImage');
        // store image in public folder (blogimage folder)
        $imageName = time().'_'.$image->getClientOriginalName();

        $image->move(public_path('ogimage/'), $ogImageName);
    }

    if (
        $request->filled('ogTitleEng') ||
        $request->filled('ogDescriptionEng') ||
        $request->filled('ogUrl') ||
        $request->filled('metadescription') ||
        $request->filled('keywords') ||
        $request->filled('author') ||
        $request->filled('tages') ||
        $request->file('ogImage')
    ) {
        $metablogs = new MetaPropertyBlog();
        $metablogs->blogId = $blogs->id;
        $metablogs->ogTitleEng = $request->ogTitleEng;
        $metablogs->ogDescriptionEng = $request->ogDescriptionEng;
        $metablogs->ogImage = $ogImageName;
        $metablogs->ogUrl = $request->ogUrl;
        $metablogs->description = $request->metadescription;
        $metablogs->keywords = $request->keywords;
        $metablogs->author = $request->author;
        $metablogs->tages = $request->tages;
        $metablogs->save();
    }



    return redirect()->route('blog')->with('msg','Record Inserted Successfully');

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
        $metablogs = MetaPropertyBlog::where('blogId', $id)->first();
        return view('admin.blog.edit', compact('blogs', 'metablogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required',
            'slug' => 'nullable|unique:blogs,slug,'.$id,
            'author' => 'required'
        ]);

        $blogs = Blog::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // store image in public folder (blogimage folder)
           $imageName = time().'_'.$image->getClientOriginalName();

            $image->move(public_path('blogimage/'), $imageName);
            $blogs->image = $imageName;
        }

        $blogs->title = $request->title;
        // $blogs->slug = $request->slug;
        $blogs->slug = Str::slug($request->title);
        $blogs->description = $request->description;
        $blogs->status = $request->status;
        $blogs->save();


        // $metablogs = new MetaPropertyBlog();
        $metablogs = MetaPropertyBlog::where('blogId', $blogs->id)->first();
        if (!$metablogs) {
            $metablogs = new MetaPropertyBlog();
            $metablogs->blogId = $blogs->id;
        }
        $ogImageName = null;
        if ($request->hasFile('ogImage')) {
            $image = $request->file('ogImage');
            // store image in public folder (blogimage folder)
            $imageName = time().'_'.$image->getClientOriginalName();

            $image->move(public_path('ogimage/'), $ogImageName);
            $metablogs->ogImage = $ogImageName;
        }

        if (
            $request->filled('ogTitleEng') ||
            $request->filled('ogDescriptionEng') ||
            $request->filled('ogUrl') ||
            $request->filled('metadescription') ||
            $request->filled('keywords') ||
            $request->filled('author') ||
            $request->filled('tages') ||
            $request->file('ogImage')
        ) {
            // $metablogs = new MetaPropertyBlog();
            $metablogs->blogId = $blogs->id;
            $metablogs->ogTitleEng = $request->ogTitleEng;
            $metablogs->ogDescriptionEng = $request->ogDescriptionEng;
            $metablogs->ogImage = $ogImageName;
            $metablogs->ogUrl = $request->ogUrl;
            $metablogs->description = $request->metadescription;
            $metablogs->keywords = $request->keywords;
            $metablogs->author = $request->author;
            $metablogs->tages = $request->tages;
            $metablogs->save();
        }

        return redirect()->route('blog')->with('msg', 'Record Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogs = Blog::find($id);
        $metablogs = MetaPropertyBlog::where('blogId', $id)->first();
        if ($metablogs) {
            $metablogs->delete();
        }
        $blogs->delete();
        return redirect()->route('blog')->with('msg', 'Data Delete Successfully.');
    }
}
