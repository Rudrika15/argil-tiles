<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\Contact;
use Validator;


class InquiryController extends Controller
{
    //
    function index()
    {

       $data=Inquiry::orderBy('id','desc')->get();
        return view("admin.inquiry.index" , compact('data'));
    }

    function contactshow()
    {
       $data=Contact::orderBy('id','desc')->get();
        return view("admin.inquiry.contactshow",compact('data'));
    }

    function create()
    {
        return view("admin.inquiry.create");
    }


    function store(Request $request)
    {
        $rules=array(
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'details' => 'required'
        	);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }

            $inquiry= new Inquiry ();

			$inquiry->subject=$request->subject;
			$inquiry->name=$request->name;
			$inquiry->email=$request->email;
			$inquiry->phone=$request->phone;
			$inquiry->message=$request->message;
			$inquiry->details=$request->details;
			$inquiry->save();

            return redirect()->back()->with('success','Record Insert Successfully');
    }

    function edit($id)
    {
        $data=Inquiry::find($id);

        return view("admin.inquiry.edit",compact('data'));
    }
    function editcode(Request $request)
    {

        $rules=array(
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'details' => 'required'
        	);

        $validator = Validator::make($request->all(),$rules);
		 if($validator->fails())
            {
                return $validator->errors();
            }
            $id=$request->id;
            $inquiry=  Inquiry::find($id);

			$inquiry->subject=$request->subject;
			$inquiry->name=$request->name;
			$inquiry->email=$request->email;
			$inquiry->phone=$request->phone;
			$inquiry->message=$request->message;
			$inquiry->details=$request->details;
			$inquiry->save();

            return redirect()->back()->with('success','Record Update Successfully');
    }
    function delete($id)
	{
        $data=Inquiry::find($id)->delete();
		return redirect('/inquiryshow')->with('success','Data Delete successfully');
    }
    function contactdelete($id)
	{
        $data=Contact::find($id)->delete();
		return back()->with('success','Data Delete successfully');
    }
}
