<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Validator;
use App\Models\Stock;

class StockController extends Controller
{
    function index()
    {
       $data=Stock::orderBy('id','desc')->get();
        return view("admin.stock.index",compact('data'));
    }
    function create()

    {

        return view("admin.stock.create");
    }

    function store(Request $request)
    {
        $rules=array(
			'stock' => 'required',
			);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }

            $stock= new Stock ();
			$stock->stock=$request->stock;
            $stock->save();

		//		return response($wsize,201);
            return redirect()->back()->with('success','Record Insert Successfully');

    }

    function edit($id)
    {
        $data=Stock::find($id);

        return view("admin.stock.edit",compact('data'));
    }
    function editcode(Request $request)
    {

        $rules=array(

			'stock' => 'required',
			);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }
            $id=$request->id;
            $stock= Stock::find($id);

			$stock->stock=$request->stock;


            $stock->save();

		//		return response(wqsize,201);
            return redirect()->back()->with('success','Record Update Successfully');

    }
    function delete($id)
	{
        $data=Stock::find($id)->delete();
		return redirect('/stockshow')->with('success','Data Delete successfully');
    }
}
