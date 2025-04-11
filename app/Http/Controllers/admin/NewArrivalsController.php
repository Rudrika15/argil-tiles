<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewArrivals;
use Illuminate\Http\Request;

class NewArrivalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newarrivals = NewArrivals::all();
        return view('admin.newarrivals.index', compact('newarrivals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $newarrivals = NewArrivals::find($id);
        return view('admin.newarrivals.edit', compact('newarrivals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'navigateurl' => 'required',
        ]);
        $newarrivals = NewArrivals::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // store image in public folder (blogimage folder)
            $imageName = $image->getClientOriginalName();

            $image->move(public_path('newarieles/'), $imageName);

            $newarrivals->image = $imageName;
        }


        $newarrivals->navigate_url = $request->navigateurl;
        $newarrivals->save();

        return redirect()->route('newarrivalsshow')->with('msg', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
