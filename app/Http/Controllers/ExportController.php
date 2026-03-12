<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Export;
use Illuminate\Support\Str;

class ExportController extends Controller
{
    //
     public function index()
    {
       $exports = Export::latest()->get();
        return view('admin.export.index', compact('exports'));
    }

    // Create Page
    public function create()
    {
        return view('admin.export.create');
    }


    // Store Data
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
        ]);

        $data = new Export();

        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->details = $request->details;

        $data->metaTitle = $request->metaTitle;
        $data->metaDescription = $request->metaDescription;
        $data->metaKeywords = $request->metaKeywords;

        $data->ogTitle = $request->ogTitle;
        $data->ogDescription = $request->ogDescription;

        $data->status = $request->status ?? 'Y';


        // Upload OG Image
        if ($request->hasFile('ogImage')) {

            $file = $request->file('ogImage');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('exportimage'), $filename);

            $data->ogImage = $filename;
        }

        $data->save();

        return redirect()->route('export')
            ->with('success', 'Export created successfully');
    }


    // Edit Page
    public function edit($id)
    {
        $export = Export::findOrFail($id);
        return view('admin.export.edit', compact('export'));
    }


    // Update Data
    public function update(Request $request, $id)
    {

        $data = Export::findOrFail($id);

        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->details = $request->details;

        $data->metaTitle = $request->metaTitle;
        $data->metaDescription = $request->metaDescription;
        $data->metaKeywords = $request->metaKeywords;

        $data->ogTitle = $request->ogTitle;
        $data->ogDescription = $request->ogDescription;

        $data->status = $request->status;


        if ($request->hasFile('ogImage')) {

            $file = $request->file('ogImage');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('exportimage'), $filename);

            $data->ogImage = $filename;
        }

        $data->save();

        return redirect()->route('export')
            ->with('success', 'Export updated successfully');
    }


    // Delete
    public function destroy($id)
    {
        $data = Export::findOrFail($id);

        $data->delete();

        return redirect()->route('export')
            ->with('success', 'Export deleted successfully');
    }

public function exportList()
{
    $exports = Export::where('status','Y')->latest()->get();

    return view('visitors.export.index',compact('exports'));
}


public function exportDetails($slug)
{
    $export = Export::where('slug',$slug)->firstOrFail();

    return view('visitors.export.details',compact('export'));
}

}
