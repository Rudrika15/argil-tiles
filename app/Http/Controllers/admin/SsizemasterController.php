<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Ssizemaster;
use Validator;

class SsizemasterController extends Controller
{
    //
    function index()
    {
        $data = Ssizemaster::orderBy('id', 'desc')->get();
        return view("admin.ssize.index", compact('data'));
    }
    function create()

    {

        return view("admin.ssize.create");
    }

    function store(Request $request)
    {
        $rules = array(
            'size' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        }

        $ssize = new Ssizemaster();
        $ssize->size = $request->size;
        $ssize->save();

        //		return response($ssize,201);
        return redirect()->route('ssizeshow')->with('msg', 'Record Inserted Successfully');
    }

    function edit($id)
    {
        $data = Ssizemaster::find($id);

        return view("admin.ssize.edit", compact('data'));
    }
    function editcode(Request $request)
    {

        $rules = array(

            'size' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $id = $request->id;
        $ssize = Ssizemaster::find($id);

        $ssize->size = $request->size;


        $ssize->save();

        //		return response(wqsize,201);
        return redirect()->route('ssizeshow')->with('msg', 'Record Update Successfully');
    }
    function delete($id)
    {
        $data = Ssizemaster::find($id)->delete();
        return redirect()->route('ssizeshow')->with('msg', 'Data Delete Successfully');
    }
}
