<?php

namespace App\Http\Controllers\admin;

use App\Models\Homepage;

use Illuminate\Http\Request;

use Validator;

class HomeController extends Controller
{
    //
    function  index()
    {

       $data=Homepage::orderBy('id','desc')->get();
        return view("admin.home.index" , compact('data'));
    }
    function  create()
    {
        return view("admin.home.create");
    }
    function store(Request $request)
    {
        $rules=array(

			'title' => 'required',
			'img' => 'required'
			);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }
      $img = time().'.'.$request->img->extension();
      $request->img->move(public_path('home_slider'), $img);

			$homepage= new Homepage ();

			$homepage->title=$request->title;
			$homepage->img=$img;
			$homepage->save();

				//return response($homepage,201);
            return redirect()->back()->with('success','Record Insert Successfully');

    }
    function edit($id)
    {
        $data=Homepage::find($id);

        return view("admin.home.edit",compact('data'));
    }
    // function editcode(Request $request)
    // {

    //     $rules=array(

	// 		'title' => 'required',
	// 		// 'img' => 'required'
	// 		);

    //     $validator = Validator::make($request->all(),$rules);
	// 	 if($validator->fails())
    //         {
    //             return $validator->errors();
    //         }
    //               $img = time().'.'.$request->img->extension();
    //              $request->img->move(public_path('home_slider'), $img);

    //         $id=$request->id;
	// 		$homepage= Homepage::find($id);

	// 		$homepage->title=$request->title;

    //         if(isset($request->img))
	// 		{
	// 		$img = time().rand().'.'.$request->img->extension();
	// 		$request->img->move(public_path('home_slider'), $img);
	// 		$homepage->img=$img;
    //         }

	// 		$homepage->save();

	// 			//return response($homepage,201);
    //         return redirect()->back()->with('success','Record Insert Successfully');

    // }

    function editcode(Request $request)
{
    $rules = [
        'title' => 'required',
    ];

    // Only validate image if a new one is uploaded
    if ($request->hasFile('img')) {
        $rules['img'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
    }

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $id = $request->id;
    $homepage = Homepage::find($id);

    if (!$homepage) {
        return redirect()->back()->with('error', 'Home record not found');
    }

    $homepage->title = $request->title;

    // Only update the image if a new one is uploaded
    if ($request->hasFile('img')) {
        $imgName = time() . rand() . '.' . $request->img->extension();
        $request->img->move(public_path('home_slider'), $imgName);
        $homepage->img = $imgName;
    }

    $homepage->save();

    return redirect()->back()->with('success', 'Record Updated Successfully');
}

    function delete($id)
	{
        $data=Homepage::find($id)->delete();
		return redirect('/homeshow')->with('success','Data Delete successfully');
    }
}
