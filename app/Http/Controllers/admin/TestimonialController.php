<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    'client_name' => 'required',
    'testimonial' => 'required',
    'rating' => 'required|numeric|min:1|max:5',
    'status' => 'required',
    'client_image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
], [
    'client_name.required' => 'Client name is required.',

    'testimonial.required' => 'Testimonial is required.',
    'status.required' => 'status is required.',

    'rating.required' => 'Rating is required.',
    'rating.numeric' => 'Rating must be a number.',
    'rating.min' => 'Rating must be at least 1.',
    'rating.max' => 'Rating cannot be greater than 5.',

    'client_image.image' => 'Please upload a valid image.',
    'client_image.mimes' => 'Only PNG, JPG, JPEG and WEBP images are allowed.',
    'client_image.max' => 'Image size must not exceed 2 MB.',
]);
        
        // $testimonial = new Testimonial();
$imagePath = null;

if ($request->hasFile('client_image')) {
    $image = $request->file('client_image');
    $imageName = time().'_'.$image->getClientOriginalName();

    $image->move(public_path('testimonial-image'), $imageName);

    $imagePath = 'testimonial-image/'.$imageName;
}


// if ($request->hasFile('client_image')) {

//     $image = $request->file('client_image');

//     $imageName = time() . '_' . $image->getClientOriginalName();

//     $image->move(
//         public_path('testimonial-image'),
//         $imageName
//     );

//     $data['client_image'] = 'testimonial-image/' . $imageName;
// }
    Testimonial::create([
        'client_name' => $request->client_name,
        'company_name' => $request->company_name,
        'designation' => $request->designation,
        'testimonial' => $request->testimonial,
        'client_image' => $imagePath,
        'rating' => $request->rating,
        'location' => $request->location,
        'project_name' => $request->project_name,
        'product_type' => $request->product_type,
        'status' => $request->status,
        'display_order' => $request->display_order,
        ]);

        return redirect()->route('admin.testimonials.index')->with('success','testimonial create successfully');
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
        $testimonial= Testimonial::findOrFail($id);
        return view('admin.testimonials.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $testimonial = Testimonial::findOrFail($id);
$imageName = $testimonial->client_image;

if ($request->file('client_image')) {

    if (
        $testimonial->client_image &&
        file_exists(public_path('testimonial-image/'.$testimonial->client_image))
    ) {
        unlink(public_path('testimonial-image/'.$testimonial->client_image));
    }

    $image = $request->file('client_image');
    $imageName = $image->getClientOriginalName();

    $image->move(
        public_path('testimonial-image/'),
        $imageName
    );
}

    $testimonial->update([
        'client_name'   => $request->client_name,
        'company_name'  => $request->company_name,
        'designation'   => $request->designation,
        'testimonial'   => $request->testimonial,
        'client_image'  => $imageName,
        'rating'        => $request->rating,
        'location'      => $request->location,
        'project_name'  => $request->project_name,
        'product_type'  => $request->product_type,
        'status'        => $request->status,
        'display_order' => $request->display_order,
    ]);

    return redirect()
        ->route('admin.testimonials.index')
        ->with('success', 'Testimonial updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success','testimonial deleted successfully');
    }
}
