<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use tidy;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caseStudies = CaseStudy::latest()->get();
        return view('admin.case_studies.index',compact('caseStudies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.case_studies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $caseStudy = new CaseStudy();

        // SLUG AUTO GENERATE
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

        if($request->hasFile('featured_image')){
            $image = $request->featured_image;
            $imageName = time().'_featured.'.$image->getClientOriginalExtension();
            $image->move(public_path('case-studies-image/case-studies'),$imageName);
            $caseStudy->featured_image = 'uploads/case_studies/'.$imageName;
        }
  // GALLERY UPLOAD
        $galleryImages = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $fileName = time().'_'.Str::random(5).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/case_studies/gallery'), $fileName);
                $galleryImages[] = 'uploads/case_studies/gallery/'.$fileName;
            }
        }

        $caseStudy->gallery = json_encode($galleryImages);

        $caseStudy->save();

        return redirect()->route('admin.case_studies.index')->with('success','case studies add success');

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
    public function edit(string $slug)
    {
        $caseStudy = CaseStudy::where('slug',$slug)->firstOrFail();
        return view('admin.case_studies.edit',compact('caseStudy'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {

        $caseStudy = CaseStudy::where('slug',$slug)->firstOrFail();
        

        $request->validate([
            'title' => 'required',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

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

        if($request->hasFile('featured_image')){
            $image = $request->featured_image;
            $imageName = time().'_featured.'.$image->getClientOriginalExtension();
            $image->move(public_path('case-studies-image/case-studies'),$imageName);
            $caseStudy->featured_image = 'uploads/case_studies/'.$imageName;
        }
  // GALLERY UPLOAD
        $galleryImages = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $fileName = time().'_'.Str::random(5).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/case_studies/gallery'), $fileName);
                $galleryImages[] = 'uploads/case_studies/gallery/'.$fileName;
            }
        }

        $caseStudy->save();
        return redirect()->route('admin.case_studies.index')->with('success','Case study update successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $caseStudy = CaseStudy::where('slug', $slug)->firstOrFail();

        // Delete images (optional cleanup)
        if ($caseStudy->featured_image && file_exists(public_path($caseStudy->featured_image))) {
            unlink(public_path($caseStudy->featured_image));
        }

        if ($caseStudy->gallery) {
            foreach (json_decode($caseStudy->gallery, true) as $img) {
                if (file_exists(public_path($img))) {
                    unlink(public_path($img));
                }
            }
        }

        $caseStudy->delete();

        return redirect()->route('admin.case_studies.index')
            ->with('success', 'Case Study deleted successfully');
    }
}
