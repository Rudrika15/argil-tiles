<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Slider;
use Validator;


class SliderController extends Controller
{
    //
    function index()
    {
        $data=Slider::orderBy('id','desc')->get();
        return view("admin.slider.index" , compact('data'));
    }

    function store(Request $request)
    {
        $rules=array(
            'title' => 'required',
            'sliderimg' => 'required'
            );

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }

            $slider= new Slider();

            $slider->title=$request->title;

            $sliderimg = time().rand().'.'.$request->sliderimg->extension();
			$request->sliderimg->move(public_path('slider'), $sliderimg);
			$slider->sliderimg=$sliderimg;
            $slider->save();

            return redirect()->route('slidershow')->with('msg', 'Record Inserted Successfully');
        }

    function create()
    {
        return view("admin.slider.create");
    }

    function edit($id)
    {
        $data=Slider::find($id);

        return view("admin.slider.edit",compact('data'));
    }
    // function editcode(Request $request)
    // {

    //     $rules=array(
    //         'title' => 'required',
    //         'sliderimg' => 'required'
    //         );

    //     $validator = Validator::make($request->all(),$rules);
	// 	 if($validator->fails())
    //         {
    //             return $validator->errors();
    //         }
    //         $id=$request->id;
    //         $slider= Slider::find($id);

    //         $slider->title=$request->title;
    //         $sliderimg = time().rand().'.'.$request->sliderimg->extension();
	// 		$request->sliderimg->move(public_path('slider'), $sliderimg);
    //         $slider->sliderimg=$sliderimg;
    //         $slider->save();

    //         return redirect()->back()->with('success','Record Insert Successfully');


    // }
    function editcode(Request $request)
{
    $rules = [
        'title' => 'required',
    ];

    // Only require the image if a new file is uploaded
    if ($request->hasFile('sliderimg')) {
        $rules['sliderimg'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
    }

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $id = $request->id;
    $slider = Slider::find($id);

    if (!$slider) {
        return redirect()->back()->with('error', 'Slider not found');
    }

    $slider->title = $request->title;

    // Only update the image if a new one is uploaded
    if ($request->hasFile('sliderimg')) {
        $sliderimg = time() . rand() . '.' . $request->sliderimg->extension();
        $request->sliderimg->move(public_path('slider'), $sliderimg);
        $slider->sliderimg = $sliderimg;
    }

    $slider->save();

    return redirect()->route('slidershow')->with('msg', 'Record Update Successfully');
}

    function delete($id)
    {
        $data=Slider::find($id)->delete();
        return redirect()->route('slidershow')->with('msg', 'Data Delete Successfully');
    }
}
