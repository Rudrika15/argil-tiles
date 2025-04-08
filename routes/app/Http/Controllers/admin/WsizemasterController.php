<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Validator;
use App\Models\Wsizemaster;

class WsizemasterController extends Controller
{
    //

    function index()
    {
       $data=Wsizemaster::orderBy('id','desc')->get();
        return view("admin.wsize.index",compact('data'));
    }
    function create()

    {

        return view("admin.wsize.create");
    }

    function store(Request $request)
    {
        $rules=array(
			'size' => 'required',
			);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }

            $wsize= new Wsizemaster ();
			$wsize->size=$request->size;
            $wsize->save();

		//		return response($wsize,201);
            return redirect()->back()->with('success','Record Insert Successfully');

    }

    function edit($id)
    {
        $data=Wsizemaster::find($id);

        return view("admin.wsize.edit",compact('data'));
    }
    function editcode(Request $request)
    {

        $rules=array(

			'size' => 'required',
			);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }
            $id=$request->id;
            $wsize= Wsizemaster::find($id);

			$wsize->size=$request->size;


            $wsize->save();

		//		return response(wqsize,201);
            return redirect()->back()->with('success','Record Update Successfully');

    }
    function delete($id)
	{
        $data=Wsizemaster::find($id)->delete();
		return redirect('/wsizeshow')->with('success','Data Delete successfully');
    }
}
