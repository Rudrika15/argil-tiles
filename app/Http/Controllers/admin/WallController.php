<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Wallproduct;
use App\Models\Designtype;
use App\Models\Stock;
use App\Models\Finishtype;
use App\Models\Wsizemaster;
use Validator;


class WallController extends Controller
{
	//
	function index()
	{
		$wdata = Wallproduct::orderBy('id', 'desc')->get();
		return view("admin.wallproduct.index", compact('wdata'));
	}

	function create()
	{
		$data = Designtype::all();
		$data1 = Stock::all();
		$data2 = Finishtype::all();
		$data3 = Wsizemaster::all();
		return view("admin.wallproduct.create", compact('data', 'data1', 'data2', 'data3'));
	}


	function store(Request $request)
	{
		$rules = array(

			'name' => 'required',
			'size' => 'required',
			'finishType' => 'required',
			'stock' => 'required',
			'designType' => 'required',
			'mainImg' => 'required'
		);

		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return $validator->errors();
		}

		$wall = new Wallproduct();

		$wall->name = $request->name;
		$wall->size = $request->size;
		$wall->finishType = $request->finishType;
		$wall->stock = $request->stock;
		$wall->designType = $request->designType;

		$mainImg = time() . rand() . '.' . $request->mainImg->extension();
		$request->mainImg->move(public_path('wall'), $mainImg);
		$wall->mainImg = $mainImg;

		if (isset($request->subImg1)) {
			$subImg1 = time() . rand() . '.' . $request->subImg1->extension();
			$request->subImg1->move(public_path('wall'), $subImg1);
			$wall->subImg1 = $subImg1;
		} else {
			$wall->subImg1 = null;
		}
		if (isset($request->subImg2)) {
			$subImg2 = time() . rand() . '.' . $request->subImg2->extension();
			$request->subImg2->move(public_path('wall'), $subImg2);
			$wall->subImg2 = $subImg2;
		} else {
			$wall->subImg2 = null;
		}

		if (isset($request->subImg3)) {
			$subImg3 = time() . rand() . '.' . $request->subImg3->extension();
			$request->subImg3->move(public_path('wall'), $subImg3);
			$wall->subImg3 = $subImg3;
		} else {
			$wall->subImg3 = null;
		}
		if (isset($request->subImg4)) {
			$subImg4 = rand() . '.' . $request->subImg4->extension();
			$request->subImg4->move(public_path('wall'), $subImg4);
			$wall->subImg4 = $subImg4;
		} else {
			$wall->subImg4 = null;
		}
		if (isset($request->subImg5)) {
			$subImg5 = time() . '.' . $request->subImg5->extension();
			$request->subImg5->move(public_path('wall'), $subImg5);
			$wall->subImg5 = $subImg5;
		} else {
			$wall->subImg5 = null;
		}

		$wall->save();

        return redirect()->route('wallshow')->with('msg', 'Record Inserted Successfully');
	}

	function edit($id)
	{
		$data = Wallproduct::find($id);
		$data1 = Designtype::all();
		$data2 = Stock::all();
		$data3 = Finishtype::all();
		$data4 = Wsizemaster::all();
		return view("admin.wallproduct.edit", compact('data', 'data1', 'data2', 'data3', 'data4'));
	}
	function editcode(Request $request)
	{

		$rules = array(

			'name' => 'required',
			'size' => 'required',
			'finishType' => 'required',
			'stock' => 'required',
			'designType' => 'required'
		);

		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return $validator->errors();
		}
		$id = $request->id;
		$wall =  Wallproduct::find($id);

		$wall->name = $request->name;
		$wall->size = $request->size;
		$wall->finishType = $request->finishType;
		$wall->stock = $request->stock;
		$wall->designType = $request->designType;

		if (isset($request->mainImg)) {
			$mainImg = time() . rand() . '.' . $request->mainImg->extension();
			$request->mainImg->move(public_path('wall'), $mainImg);
			$wall->mainImg = $mainImg;
		}

		if (isset($request->subImg1)) {
			$subImg1 = time() . rand() . '.' . $request->subImg1->extension();
			$request->subImg1->move(public_path('wall'), $subImg1);
			$wall->subImg1 = $subImg1;
		} else {
			$wall->subImg1 = null;
		}
		if (isset($request->subImg2)) {
			$subImg2 = time() . rand() . '.' . $request->subImg2->extension();
			$request->subImg2->move(public_path('wall'), $subImg2);
			$wall->subImg2 = $subImg2;
		} else {
			$wall->subImg2 = null;
		}

		if (isset($request->subImg3)) {
			$subImg3 = time() . rand() . '.' . $request->subImg3->extension();
			$request->subImg3->move(public_path('wall'), $subImg3);
			$wall->subImg3 = $subImg3;
		} else {
			$wall->subImg3 = null;
		}
		if (isset($request->subImg4)) {
			$subImg4 = rand() . '.' . $request->subImg4->extension();
			$request->subImg4->move(public_path('wall'), $subImg4);
			$wall->subImg4 = $subImg4;
		} else {
			$wall->subImg4 = null;
		}
		if (isset($request->subImg5)) {
			$subImg5 = time() . '.' . $request->subImg5->extension();
			$request->subImg5->move(public_path('wall'), $subImg5);
			$wall->subImg5 = $subImg5;
		} else {
			$wall->subImg5 = null;
		}

		$wall->save();

        return redirect()->route('wallshow')->with('msg', 'Record Update Successfully');
	}
	function delete($id)
	{

		$data = Wallproduct::find($id)->delete();

        return redirect()->route('wallshow')->with('msg', 'Data Delete Successfully');
	}
}
