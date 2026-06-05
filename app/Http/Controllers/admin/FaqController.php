<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $faq = Faq::latest()->paginate(10);
        return view('/admin.faqs.index',compact('faq'));
    }

    public function create(){
        return view('/admin.faqs.create');
    }

    public function store(Request $request){
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required',
        ]);

        $faq = new Faq();

        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->schema = $request->schema;
        $faq->is_spc = $request->has('is_spc');
        $faq->is_quartz = $request->has('is_quartz');

        $faq->save();

        return redirect()->route('admin.faqs.index')->with('success', 'CMS created successfully.');
    }

    public function edit($id){
        $faq = Faq::find($id);
        return view('admin.faqs.edit',compact('faq'));
    }

    public function update(Request $request,$id){

        $faq = Faq::findOrFail($id);

        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required',
        ]);

        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->schema = $request->schema;
        $faq->is_spc = $request->has('is_spc');
        $faq->is_quartz = $request->has('is_quartz');

        $faq->save();

        return redirect()->route('admin.faqs.index')->with('success', 'CMS created successfully.');
    }

    public function delete($id){
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('admin.faqs.index')->with('success','FAQs deleted successfully');
    }
}
