<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Designtype;
use Validator;


class DesigntypeController extends Controller
{
    //
    function index()
    {
       $data=Designtype::orderBy('id','desc')->get();
        return view("admin.designtype.index",compact('data'));
    }
    function create()

    {

        return view("admin.designtype.create");
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

            $designtype= new Designtype ();
			$designtype->type=$request->type;
            $designtype->save();

		//		return response($designtype,201);
        return redirect()->route('designtypeshow')->with('msg', 'Record Inserted Successfully');

    }

    function edit($id)
    {
        $data=Designtype::find($id);

        return view("admin.designtype.edit",compact('data'));
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
            $designtype= Designtype::find($id);

			$designtype->type=$request->type;


            $designtype->save();

		//		return response($designtype,201);
        return redirect()->route('designtypeshow')->with('msg', 'Record Update Successfully');

    }
    function delete($id)
	{
        $data=Designtype::find($id)->delete();
        return redirect()->route('designtypeshow')->with('msg', 'Data Delete Successfully');
    }
}
