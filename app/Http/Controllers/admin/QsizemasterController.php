<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Validator;

use App\Models\Qsizemaster;

class QsizemasterController extends Controller
{
    //

    function index()
    {
       $data=Qsizemaster::orderBy('id','desc')->get();
        return view("admin.qsize.index",compact('data'));
    }
    function create()

    {

        return view("admin.qsize.create");
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

            $qsize= new Qsizemaster ();
			$qsize->size=$request->size;
            $qsize->save();

		//		return response($qsize,201);
        return redirect()->route('qsizeshow')->with('msg', 'Record Inserted Successfully');

    }

    function edit($id)
    {
        $data=Qsizemaster::find($id);

        return view("admin.qsize.edit",compact('data'));
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
            $qsize= Qsizemaster::find($id);

			$qsize->size=$request->size;


            $qsize->save();

		//		return response($qsize,201);
        return redirect()->route('qsizeshow')->with('msg', 'Record Update Successfully');

    }
    function delete($id)
	{
        $data=Qsizemaster::find($id)->delete();
        return redirect()->route('qsizeshow')->with('msg', 'Data Delete Successfully');
    }
}
