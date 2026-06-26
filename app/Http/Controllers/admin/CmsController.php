<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CmsController extends Controller
{
    public function index(Request $request){
        $cms = Cms::latest()->paginate(10);
        return view('admin.cms.index',compact('cms'));
    }

    public function create(){
        return view('admin.cms.create');
    }
    // public function store(){
    //     // return view('admin.cms.create');
    //     return "hi";
    // }


    public function store(Request $request)
    {
       $request->validate([
    'title' => 'required|string|max:255',
    'slug' => 'required|string|max:255|unique:cms,slug',
    'description' => 'required|string',

    'status' => 'required|boolean',

    'meta_title' => 'nullable|string|max:60',
    'meta_keyword' => 'nullable|string|max:255',
    'meta_description' => 'nullable|string|max:160',

    'og_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

    'author' => 'nullable|string|max:255',
    'tags' => 'nullable|string|max:500',

    'og_url' => 'nullable|url|max:255',
]);
        $cms = new Cms();
//         $title = strtolower($request->title);

// $title = str_replace(
//     [' from ', ' the ', ' a ', ' an '],
//     ' ',
//     $title
// );

        $cms->title = $request->title;
        $cms->slug = Str::slug($request->slug ?: $request->title);
        // $cms->slug = Str::slug($title);
        $cms->description = $request->description;
        $cms->status = $request->status;
        $cms->meta_title = $request->meta_title;
        $cms->meta_keyword = $request->meta_keyword;
        $cms->meta_description = $request->meta_description;
        $cms->author = $request->author;
        $cms->tags = $request->tags;
        $cms->og_url = $request->og_url;

        if ($request->hasFile('og_image')) {
            $image = $request->file('og_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/cms'), $imageName);

            $cms->og_image = 'uploads/cms/' . $imageName;
        }

        $cms->save();

        return redirect()
            ->route('admin.cms.index')
            ->with('success', 'CMS created successfully.');
    }

    public function show($slug)
    {
        $page = Cms::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();
        $spcUrls = [
        'spc-flooring-manufacturer-india',
        'spc-flooring-exporter-india',
        'spc-flooring-manufacturer-morbi',
        'spc-flooring-manufacturer-gujarat',
        'rigid-core-spc-flooring',
        'luxury-vinyl-flooring-manufacturer',
    ];

    $quartzUrls = [
        'quartz-slab-manufacturer-india',
        'quartz-slab-manufacturer-morbi',
        'quartz-surface-exporter-india',
    ];

    $productUrl = null;

    if (in_array($page->slug, $spcUrls)) {
        $productUrl = url('/spcproducts'); // Your SPC product page URL
    } elseif (in_array($page->slug, $quartzUrls)) {
        $productUrl = url('/quartzsurface'); // Your Quartz product page URL
    }

        return view('visitors.cms.show', compact('page','productUrl'));
    }

    
     public function edit($id)
    {
        $cms =Cms::findOrFail($id);
        return view('admin.cms.edit', compact('cms'));
    }


    public function update(Request $request, $id)
    {
        $cms = Cms::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|unique:cms,slug,' . $id,
            'description' => 'required',
            'status' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_keyword' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'og_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'author' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'og_url' => 'nullable|url|max:255'
        ]);

        $cms->title = $request->title;
    //    $cms->slug = Str::slug($request->slug ?: $request->title);
       $cms->slug = $request->slug;

        $cms->description = $request->description;
        $cms->status = $request->status;

        $cms->meta_title = $request->meta_title;
        $cms->meta_keyword = $request->meta_keyword;
        $cms->meta_description = $request->meta_description;
        $cms->author = $request->author;
        $cms->tags = $request->tags;
        $cms->og_image = $request->og_image;
        $cms->og_url  = $request->og_url;

        if ($request->hasFile('og_image')) {

            if ($cms->og_image && file_exists(public_path($cms->og_image))) {
                unlink(public_path($cms->og_image));
            }

            $image = $request->file('og_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/cms'), $imageName);

            $cms->og_image = 'uploads/cms/' . $imageName;
        }

        $cms->save();

        return redirect()
            ->route('admin.cms.index')
            ->with('success', 'CMS updated successfully.');
    }

   public function delete($id)
{
    $cms = Cms::findOrFail($id);

    if ($cms->og_image && file_exists(public_path($cms->og_image))) {
        unlink(public_path($cms->og_image));
    }

    $cms->delete();

    return redirect()
        ->route('admin.cms.index')
        ->with('msg', 'Data Deleted Successfully.');
}
}

