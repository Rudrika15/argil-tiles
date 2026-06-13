<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CaseStudyController extends Controller
{
    public function index()
    {
        $caseStudies = CaseStudy::latest()->get();
        return view('admin.case_studies.index', compact('caseStudies'));
    }

    public function create()
    {
        return view('admin.case_studies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $caseStudy = new CaseStudy();

        // ================= SLUG =================
        $caseStudy->slug = Str::slug($request->title);

        // ================= FIELDS =================
        $caseStudy->title = $request->title;
        $caseStudy->short_description = $request->short_description;
        $caseStudy->overview = $request->overview;
        $caseStudy->client_name = $request->client_name;
        $caseStudy->industry = $request->industry;
        $caseStudy->location = $request->location;
        $caseStudy->project_type = $request->project_type;
        $caseStudy->project_area = $request->project_area;
        $caseStudy->challenge = $request->challenge;
        $caseStudy->solution = $request->solution;
        $caseStudy->result = $request->result;
        $caseStudy->products_used = $request->products_used;
        $caseStudy->completion_date = $request->completion_date;
        $caseStudy->seo_title = $request->seo_title;
        $caseStudy->seo_description = $request->seo_description;
        $caseStudy->seo_keywords = $request->seo_keywords;
        $caseStudy->status = $request->status ?? 'draft';
        $caseStudy->is_featured = $request->is_featured ?? 0;

        // ================= FEATURED IMAGE =================
        if ($request->hasFile('featured_image')) {

            $image = $request->file('featured_image');

$imageName = time().'_'.Str::random(8).'.'.$image->getClientOriginalExtension();

$image->move(public_path('featured-image'), $imageName);

$caseStudy->featured_image = $imageName;
        }

        // ================= GALLERY UPLOAD =================
       $galleryImages = [];

if ($request->hasFile('gallery')) {

    foreach ($request->file('gallery') as $file) {

        $fileName = time().'_'.Str::random(8).'.'.$file->getClientOriginalExtension();

        $file->move(public_path('gallery-image'), $fileName);

       $galleryImages[] = $fileName;
    }
}

$caseStudy->gallery = json_encode($galleryImages);

        $caseStudy->save();

        return redirect()->route('admin.case_studies.index')
            ->with('success', 'Case study added successfully');
    }

    public function edit(string $slug)
    {
        $caseStudy = CaseStudy::where('slug', $slug)->firstOrFail();
        $gallery = json_decode($caseStudy->gallery, true) ?? [];
        return view('admin.case_studies.edit', compact('caseStudy','gallery'));
    }

    public function update(Request $request, string $slug)
    {
        $caseStudy = CaseStudy::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        // ================= SLUG + FIELDS =================
        $caseStudy->slug = Str::slug($request->title);

        $caseStudy->title = $request->title;
        $caseStudy->short_description = $request->short_description;
        $caseStudy->overview = $request->overview;
        $caseStudy->client_name = $request->client_name;
        $caseStudy->industry = $request->industry;
        $caseStudy->location = $request->location;
        $caseStudy->project_type = $request->project_type;
        $caseStudy->project_area = $request->project_area;
        $caseStudy->challenge = $request->challenge;
        $caseStudy->solution = $request->solution;
        $caseStudy->result = $request->result;
        $caseStudy->products_used = $request->products_used;
        $caseStudy->completion_date = $request->completion_date;
        $caseStudy->seo_title = $request->seo_title;
        $caseStudy->seo_description = $request->seo_description;
        $caseStudy->seo_keywords = $request->seo_keywords;
        $caseStudy->status = $request->status ?? 'draft';
        $caseStudy->is_featured = $request->is_featured ?? 0;

        // ================= FEATURED IMAGE UPDATE =================
        if ($request->hasFile('featured_image')) {

            if ($caseStudy->featured_image && file_exists(public_path('featured-image/' . $caseStudy->featured_image))) {
                unlink(public_path('featured-image/' . $caseStudy->featured_image));
            }

           $image = $request->file('featured_image');

$imageName = time().'_'.Str::random(8).'.'.$image->getClientOriginalExtension();

$image->move(public_path('featured-image'), $imageName);

$caseStudy->featured_image = $imageName;
        }

        // ================= GALLERY UPDATE =================
        if ($request->hasFile('gallery')) {

            // delete old gallery
            if ($caseStudy->gallery) {
                foreach (json_decode($caseStudy->gallery, true) as $oldImage) {
                   $oldPath = public_path('gallery-image/' . $oldImage);
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }
            }

            $galleryImages = [];

if ($request->hasFile('gallery')) {

    $galleryImages = [];

    foreach ($request->file('gallery') as $file) {

        $fileName = time().'_'.Str::random(8).'.'.$file->getClientOriginalExtension();

        $file->move(public_path('gallery-image'), $fileName);

        $galleryImages[] = $fileName;
    }

    $caseStudy->gallery = json_encode($galleryImages);
}

// $caseStudy->gallery = json_encode($galleryImages);
        }

        $caseStudy->save();

        return redirect()->route('admin.case_studies.index')
            ->with('success', 'Case study updated successfully');
    }

    public function delete(string $slug)
    {
        $caseStudy = CaseStudy::where('slug', $slug)->firstOrFail();

        // delete featured image
        if ($caseStudy->featured_image && file_exists(public_path('featured-image/' . $caseStudy->featured_image))) {
            unlink(public_path('featured-image/' . $caseStudy->featured_image));
        }

        // delete gallery images
        if ($caseStudy->gallery) {
            foreach (json_decode($caseStudy->gallery, true) as $img) {
                $path = public_path('gallery-image/' . $img);
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }

        $caseStudy->delete();

        return redirect()->route('admin.case_studies.index')
            ->with('success', 'Case Study deleted successfully');
    }
}