<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Quartzproduct;
use App\Models\Qsizemaster;
use App\Models\Stock;
use App\Models\Finishtype;
use App\Models\MetaPropertyQuartz;
use Validator;
use Illuminate\Support\Str;


class QuartzController extends Controller
{
	//
	function index()
	{
		$data = Quartzproduct::orderBy('id', 'desc')->get();
		return view("admin.quartz.index", compact('data'));
	}

	function store(Request $request)
	{
		$rules = array(
			'name' => 'required',
			'sizes' => 'required',
			'thicknesses' => 'required',
			'finishType' => 'required',
			'stock' => 'required',
			'primarycolors' => 'required',
			'bookmatch' => 'required',
			'mainImg' => 'required'
		);

		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return $validator->errors();
		}

		$quartzproduct = new Quartzproduct();

		$quartzproduct->name = $request->name;
        // $quartzproduct->slug = str_replace(' ', '-', $request->slug);
        $quartzproduct->slug = Str::slug($request->slug);
		$quartzproduct->sizes = $request->sizes;
		$quartzproduct->thicknesses = $request->thicknesses;
		$quartzproduct->finishType = $request->finishType;
		$quartzproduct->stock = $request->stock;
		$quartzproduct->primarycolors = $request->primarycolors;
		$quartzproduct->bookmatch = $request->bookmatch;

		$mainImg = time() . rand() . '.' . $request->mainImg->extension();
		$request->mainImg->move(public_path('quartz'), $mainImg);
		$quartzproduct->mainImg = $mainImg;

		if (isset($request->subImg1)) {
			$subImg1 = time() . rand() . '.' . $request->subImg1->extension();
			$request->subImg1->move(public_path('quartz'), $subImg1);
			$quartzproduct->subImg1 = $subImg1;
		} else {
			$quartzproduct->subImg1 = null;
		}
		if (isset($request->subImg2)) {
			$subImg2 = time() . rand() . '.' . $request->subImg2->extension();
			$request->subImg2->move(public_path('quartz'), $subImg2);
			$quartzproduct->subImg2 = $subImg2;
		} else {
			$quartzproduct->subImg2 = null;
		}

		if (isset($request->subImg3)) {
			$subImg3 = time() . rand() . '.' . $request->subImg3->extension();
			$request->subImg3->move(public_path('quartz'), $subImg3);
			$quartzproduct->subImg3 = $subImg3;
		} else {
			$quartzproduct->subImg3 = null;
		}
		if (isset($request->subImg4)) {
			$subImg4 = rand() . '.' . $request->subImg4->extension();
			$request->subImg4->move(public_path('quartz'), $subImg4);
			$quartzproduct->subImg4 = $subImg4;
		} else {
			$quartzproduct->subImg4 = null;
		}
		if (isset($request->subImg5)) {
			$subImg5 = time() . '.' . $request->subImg5->extension();
			$request->subImg5->move(public_path('quartz'), $subImg5);
			$quartzproduct->subImg5 = $subImg5;
		} else {
			$quartzproduct->subImg5 = null;
		}


		$quartzproduct->save();


        $ogImageName = null;
    if ($request->file('ogImage')) {
        $image = $request->file('ogImage');

        $ogImageName = $image->getClientOriginalName();

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
        $metaquartz = new MetaPropertyQuartz();
        $metaquartz->quartzId = $quartzproduct->id;
        $metaquartz->ogTitleEng = $request->ogTitleEng;
        $metaquartz->ogDescriptionEng = $request->ogDescriptionEng;
        $metaquartz->ogImage = $ogImageName;
        $metaquartz->ogUrl = $request->ogUrl;
        $metaquartz->description = $request->metadescription;
        $metaquartz->keywords = $request->keywords;
        $metaquartz->author = $request->author;
        $metaquartz->tages = $request->tages;
        $metaquartz->save();
    }

        return redirect()->route('quartzshow')->with('msg', 'Record Inserted Successfully');
	}

	function create()
	{
		$data1 = Qsizemaster::all();
		$data2 = Finishtype::all();
		$data3 = Stock::all();
		return view("admin.quartz.create", compact('data1', 'data2', 'data3'));
	}

	function edit($id)
	{
		$data = Quartzproduct::find($id);
        // return $data;
		$data1 = Qsizemaster::all();
		$data2 = Finishtype::all();
		$data3 = Stock::all();
        $data4 = MetaPropertyQuartz::where('quartzId', $id)->first();
		return view("admin.quartz.edit", compact('data', 'data1', 'data2', 'data3', 'data4'));
	}
	function editcode(Request $request)
	{

		$rules = array(
			'name' => 'required',
			'sizes' => 'required',
			'thicknesses' => 'required',
			'finishType' => 'required',
			'stock' => 'required',
			'primarycolors' => 'required',
			'bookmatch' => 'required'
		);

		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return $validator->errors();
		}
		$id = $request->id;
		$quartzproduct = Quartzproduct::find($id);

		$quartzproduct->name = $request->name;
        $quartzproduct->slug = Str::slug($request->name);

		$quartzproduct->sizes = $request->sizes;
		$quartzproduct->thicknesses = $request->thicknesses;
		$quartzproduct->finishType = $request->finishType;
		$quartzproduct->stock = $request->stock;
		$quartzproduct->primarycolors = $request->primarycolors;

		$quartzproduct->bookmatch = $request->bookmatch;

		if (isset($request->mainImg)) {
			$mainImg = time() . rand() . '.' . $request->mainImg->extension();
			$request->mainImg->move(public_path('quartz'), $mainImg);
			$quartzproduct->mainImg = $mainImg;
		}
		if (isset($request->subImg1)) {
			$subImg1 = time() . rand() . '.' . $request->subImg1->extension();
			$request->subImg1->move(public_path('quartz'), $subImg1);
			$quartzproduct->subImg1 = $subImg1;
		} else {
			$quartzproduct->subImg1 = null;
		}
		if (isset($request->subImg2)) {
			$subImg2 = time() . rand() . '.' . $request->subImg2->extension();
			$request->subImg2->move(public_path('quartz'), $subImg2);
			$quartzproduct->subImg2 = $subImg2;
		} else {
			$quartzproduct->subImg2 = null;
		}

		if (isset($request->subImg3)) {
			$subImg3 = time() . rand() . '.' . $request->subImg3->extension();
			$request->subImg3->move(public_path('quartz'), $subImg3);
			$quartzproduct->subImg3 = $subImg3;
		} else {
			$quartzproduct->subImg3 = null;
		}
		if (isset($request->subImg4)) {
			$subImg4 = rand() . '.' . $request->subImg4->extension();
			$request->subImg4->move(public_path('quartz'), $subImg4);
			$quartzproduct->subImg4 = $subImg4;
		} else {
			$quartzproduct->subImg4 = null;
		}
		if (isset($request->subImg5)) {
			$subImg5 = time() . '.' . $request->subImg5->extension();
			$request->subImg5->move(public_path('quartz'), $subImg5);
			$quartzproduct->subImg5 = $subImg5;
		} else {
			$quartzproduct->subImg5 = null;
		}


		$quartzproduct->save();


         $metaquartz = MetaPropertyQuartz::where('quartzId', $quartzproduct->id)->first();
         if (!$metaquartz) {
             $metaquartz = new MetaPropertyQuartz();
             $metaquartz->quartzId = $quartzproduct->id;
         }
         $ogImageName = null;
         if ($request->hasFile('ogImage')) {
             $image = $request->file('ogImage');

             $ogImageName = $image->getClientOriginalName();

             $image->move(public_path('ogimage/'), $ogImageName);
             $metaquartz->ogImage = $ogImageName;
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

             $metaquartz->quartzId = $quartzproduct->id;
             $metaquartz->ogTitleEng = $request->ogTitleEng;
             $metaquartz->ogDescriptionEng = $request->ogDescriptionEng;
             $metaquartz->ogImage = $ogImageName;
             $metaquartz->ogUrl = $request->ogUrl;
             $metaquartz->description = $request->metadescription;
             $metaquartz->keywords = $request->keywords;
             $metaquartz->author = $request->author;
             $metaquartz->tages = $request->tages;
             $metaquartz->save();
         }



        return redirect()->route('quartzshow')->with('msg', 'Record Update Successfully');
	}
	function delete($id)
	{

		$data = Quartzproduct::find($id)->delete();
        $metaquartz = MetaPropertyQuartz::where('quartzId', $id)->delete();
        return redirect()->route('quartzshow')->with('msg', 'Data Deleted Successfully');
	}
}
