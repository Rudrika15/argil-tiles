<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Newsroom;
use Validator;


class NewsRoomController extends Controller
{
    //
    function index()
    {
        $data=Newsroom::orderBy('id','desc')->get();
        return view("admin.newsroom.index", compact('data'));
    }



    function store(Request $request)
    {
        $rules=array(
            'title' => 'required',
            'img' => 'required',
            'details' => 'required'
        	);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }

            $newsroom= new Newsroom ();

			$newsroom->title=$request->title;
			$newsroom->details=$request->details;


			$img = time().rand().'.'.$request->img->extension();
			$request->img->move(public_path('newsroom'), $img);
			$newsroom->img=$img;




			$newsroom->save();

            return redirect()->back()->with('success','Record Insert Successfully');
    }




    function create()
    {
        return view("admin.newsroom.create");
    }

    function edit($id)
    {
        $data=Newsroom::find($id);

        return view("admin.newsroom.edit",compact('data'));
    }
    function editcode(Request $request)
    {

        $rules=array(
            'title' => 'required',
            'img' => 'required',
            'details' => 'required'
        	);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }

            $id=$request->id;
			$newsroom= Newsroom::find($id);

			$newsroom->title=$request->title;
			$newsroom->details=$request->details;


			$img = time().rand().'.'.$request->img->extension();
			$request->img->move(public_path('newsroom'), $img);
			$newsroom->img=$img;




			$newsroom->save();

            return redirect()->back()->with('success','Record Insert Successfully');
    }
    function delete($id)
	{
        $data=Newsroom::find($id)->delete();
		return redirect('/newsroomshow')->with('success','Data Delete successfully');
    }
}

