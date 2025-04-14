<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Finishtype;
use Validator;

class FinshtypeController extends Controller
{
    //
    function index()
    {
       $data=Finishtype::orderBy('id','desc')->get();
        return view("admin.finishtype.index",compact('data'));
    }
    function create()

    {

        return view("admin.finishtype.create");
    }

    function store(Request $request)
    {
        $rules=array(
			'type' => 'required',
			);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }

            $finishtype= new Finishtype ();
			$finishtype->type=$request->type;
            $finishtype->save();

		//		return response($finishtype,201);
        return redirect()->route('finishtypeshow')->with('msg', 'Record Inserted Successfully');

    }

    function edit($id)
    {
        $data=Finishtype::find($id);

        return view("admin.finishtype.edit",compact('data'));
    }
    function editcode(Request $request)
    {

        $rules=array(

			'type' => 'required',
			);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }
            $id=$request->id;
            $finishtype= Finishtype::find($id);

			$finishtype->type=$request->type;


            $finishtype->save();

		//		return response($finishtype,201);
        return redirect()->route('finishtypeshow')->with('msg', 'Record Update Successfully');

    }
    function delete($id)
	{
        $data=Finishtype::find($id)->delete();
        return redirect()->route('finishtypeshow')->with('msg', 'Data Delete Successfully');
    }
}
