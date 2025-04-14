<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use Validator;

use App\Models\Catelogue;


class CatelogueController extends Controller
{

    //
    function index()
    {
       $data=Catelogue::orderBy('id','desc')->get();
        return view("admin.catelogue.index",compact('data'));
    }
    function create()

    {

        return view("admin.catelogue.create");
    }

    function store(Request $request)
    {
        $rules=array(

			'title' => 'required',
			'pdfFile' => 'required'
			);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }

            $catalogue= new Catelogue ();

			$catalogue->title=$request->title;
			if(isset($request->pdfFile))
			{
			$pdfFile = time().rand().'.'.$request->pdfFile->extension();
			$request->pdfFile->move(public_path('pdf'), $pdfFile);
			$catalogue->pdfFile=$pdfFile;
            }$catalogue->save();

		//		return response($catalogue,201);
        return redirect()->route('catelogueshow')->with('msg', 'Record Inserted Successfully');

    }

    function edit($id)
    {
        $data=Catelogue::find($id);

        return view("admin.catelogue.edit",compact('data'));
    }
    function editcode(Request $request)
    {

        $rules=array(

			'title' => 'required',
			'pdfFile' => 'required'
			);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }
            $id=$request->id;
            $catalogue= Catelogue::find($id);

			$catalogue->title=$request->title;

            if(isset($request->pdfFile))
			{
			$pdfFile = time().rand().'.'.$request->pdfFile->extension();
			$request->pdfFile->move(public_path('pdf'), $pdfFile);
			$catalogue->pdfFile=$pdfFile;
            }

            $catalogue->save();

		//		return response($catalogue,201);
        return redirect()->route('catelogueshow')->with('msg', 'Record Update Successfully');

    }
    function delete($id)
	{
        $data=Catelogue::find($id)->delete();
        return redirect()->route('catelogueshow')->with('msg', 'Data Delete Successfully');
    }
}
