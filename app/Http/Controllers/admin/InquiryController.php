<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\Contact;
// use Validator;
use Illuminate\Support\Facades\Validator;


class InquiryController extends Controller
{
    //
    function index()
    {

       $data=Inquiry::orderBy('id','desc')->take(50)->get()->sortBy('id')->values();
        return view("admin.inquiry.index" , compact('data'));
    }

    function contactshow()
    {
       $data=Contact::orderBy('id','desc')->take(50)->get()->sortBy('id')->values();
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
        return redirect()->route('inquiryshow')->with('msg', 'Data Delete Successfully.');

    }
    function contactdelete($id)
	{
        $data=Contact::find($id)->delete();
        return redirect()->route('contactshow')->with('msg', 'Data Delete Successfully.');
    }

    public function exportInquiries()
    {
        $inquiries = Inquiry::orderBy('id', 'asc')->get();
        $fileName = 'inquiries_export_' . date('Y_m_d_H_i_s') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$fileName}\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $callback = function () use ($inquiries) {
            $file = fopen('php://output', 'w');
            fputs($file, "\xEF\xBB\xBF");
            fputcsv($file, ['ID', 'Subject', 'Name', 'Email', 'Phone', 'Details', 'Message', 'Created At']);

            foreach ($inquiries as $item) {
                fputcsv($file, [
                    $item->id,
                    $item->subject,
                    $item->name,
                    $item->email,
                    $item->phone,
                    $item->details,
                    $item->message,
                    $item->created_at ? $item->created_at->format('Y-m-d H:i:s') : '',
                ]);
            }
            fclose($file);
        };

        return response()->streamDownload($callback, $fileName, $headers);
    }

    public function exportContacts()
    {
        $contacts = Contact::orderBy('id', 'asc')->get();
        $fileName = 'contacts_export_' . date('Y_m_d_H_i_s') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$fileName}\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $callback = function () use ($contacts) {
            $file = fopen('php://output', 'w');
            fputs($file, "\xEF\xBB\xBF");
            fputcsv($file, ['ID', 'Name', 'Email', 'Contact No', 'Message', 'Created At']);

            foreach ($contacts as $item) {
                fputcsv($file, [
                    $item->id,
                    $item->name,
                    $item->email,
                    $item->contactno ?? $item->phone ?? '',
                    $item->message,
                    $item->created_at ? $item->created_at->format('Y-m-d H:i:s') : '',
                ]);
            }
            fclose($file);
        };

        return response()->streamDownload($callback, $fileName, $headers);
    }
}
