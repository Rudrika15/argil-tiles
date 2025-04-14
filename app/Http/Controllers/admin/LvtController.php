<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Lvtproduct;
use App\Models\Ssizemaster;
use Validator;
// use Illuminate\Support\Str;


class LvtController extends Controller
{
    //
    function index()
    {
        $data = Lvtproduct::orderBy('id', 'desc')->get();
        return view("admin.lvtproduct.index", compact('data'));
    }
    function create()
    {
        $lvtsize = Ssizemaster::all();
        return view("admin.lvtproduct.create", compact('lvtsize'));
    }


    function store(Request $request)
    {
        $rules = array(
            'names' => 'required',
            'thicknesses' => 'required',
            'primarycolors' => 'required',
            'edges' => 'required',
            'clicktype' => 'required',
            'shadeVariation' => 'required',
            'backingType' => 'required',
            'style' => 'required',
            'wearLayer' => 'required',
            'bookmatch' => 'required',
            'mainImg' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        }

        $lvtproduct = new Lvtproduct();

        $lvtproduct->names = $request->names;
        $lvtproduct->thicknesses = $request->thicknesses;
        $lvtproduct->primarycolors = $request->primarycolors;
        $lvtproduct->edges = $request->edges;
        $lvtproduct->clicktype = $request->clicktype;
        $lvtproduct->shadeVariation = $request->shadeVariation;
        $lvtproduct->backingType = $request->backingType;
        $lvtproduct->style = $request->style;
        $lvtproduct->wearLayer = $request->wearLayer;
        $lvtproduct->bookmatch = $request->bookmatch;

        $mainImg = time() . rand() . '.' . $request->mainImg->extension();
        $request->mainImg->move(public_path('spc'), $mainImg);
        $lvtproduct->mainImg = $mainImg;

        if (isset($request->subImg1)) {
            $subImg1 = time() . rand() . '.' . $request->subImg1->extension();
            $request->subImg1->move(public_path('spc'), $subImg1);
            $lvtproduct->subImg1 = $subImg1;
        }
        if (isset($request->subImg2)) {
            $subImg2 = time() . rand() . '.' . $request->subImg2->extension();
            $request->subImg2->move(public_path('spc'), $subImg2);
            $lvtproduct->subImg2 = $subImg2;
        }

        if (isset($request->subImg3)) {
            $subImg3 = time() . rand() . '.' . $request->subImg3->extension();
            $request->subImg3->move(public_path('spc'), $subImg3);
            $lvtproduct->subImg3 = $subImg3;
        }
        if (isset($request->subImg4)) {
            $subImg4 = time() . rand() . '.' . $request->subImg4->extension();
            $request->subImg4->move(public_path('spc'), $subImg4);
            $lvtproduct->subImg4 = $subImg4;
        }
        if (isset($request->subImg2)) {
            $subImg5 = time() . rand() . '.' . $request->subImg5->extension();
            $request->subImg5->move(public_path('spc'), $subImg5);
            $lvtproduct->subImg5 = $subImg5;
        }


        $lvtproduct->save();

        return redirect()->route('lvtshow')->with('msg', 'Record Inserted Successfully');


    }


    function edit($id)
    {
        $data = Lvtproduct::find($id);
        $lvtsize = Ssizemaster::all();
        return view("admin.lvtproduct.edit", compact('data', 'lvtsize'));
    }
    function editcode(Request $request)
    {

        $rules = array(
            'names' => 'required',
            'thicknesses' => 'required',
            'primarycolors' => 'required',
            'edges' => 'required',
            'clicktype' => 'required',
            'shadeVariation' => 'required',
            'backingType' => 'required',
            'style' => 'required',
            'wearLayer' => 'required',
            'bookmatch' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        }

        $id = $request->id;
        $lvtproduct =  Lvtproduct::find($id);

        $lvtproduct->names = $request->names;
        // $lvtproduct->slug = Str::slug($request->names);
        $lvtproduct->thicknesses = $request->thicknesses;
        $lvtproduct->primarycolors = $request->primarycolors;
        $lvtproduct->edges = $request->edges;
        $lvtproduct->clicktype = $request->clicktype;
        $lvtproduct->shadeVariation = $request->shadeVariation;
        $lvtproduct->backingType = $request->backingType;
        $lvtproduct->style = $request->style;
        $lvtproduct->wearLayer = $request->wearLayer;
        $lvtproduct->bookmatch = $request->bookmatch;

        if (isset($request->mainImg)) {
            $mainImg = time() . rand() . '.' . $request->mainImg->extension();
            $request->mainImg->move(public_path('spc'), $mainImg);
            $lvtproduct->mainImg = $mainImg;
        }

        if (isset($request->subImg1)) {
            $subImg1 = time() . rand() . '.' . $request->subImg1->extension();
            $request->subImg1->move(public_path('spc'), $subImg1);
            $lvtproduct->subImg1 = $subImg1;
        }
        if (isset($request->subImg2)) {
            $subImg2 = time() . rand() . '.' . $request->subImg2->extension();
            $request->subImg2->move(public_path('spc'), $subImg2);
            $lvtproduct->subImg2 = $subImg2;
        }

        if (isset($request->subImg3)) {
            $subImg3 = time() . rand() . '.' . $request->subImg3->extension();
            $request->subImg3->move(public_path('spc'), $subImg3);
            $lvtproduct->subImg3 = $subImg3;
        }
        if (isset($request->subImg4)) {
            $subImg4 = time() . rand() . '.' . $request->subImg4->extension();
            $request->subImg4->move(public_path('spc'), $subImg4);
            $lvtproduct->subImg4 = $subImg4;
        }
        if (isset($request->subImg2)) {
            $subImg5 = time() . rand() . '.' . $request->subImg5->extension();
            $request->subImg5->move(public_path('spc'), $subImg5);
            $lvtproduct->subImg5 = $subImg5;
        }
        $lvtproduct->save();

        return redirect()->route('lvtshow')->with('msg', 'Record Update Successfully');
    }
    function delete($id)
    {
        $data = Lvtproduct::find($id)->delete();
        return redirect()->route('lvtshow')->with('msg', 'Data Delete Successfully');
    }
}
