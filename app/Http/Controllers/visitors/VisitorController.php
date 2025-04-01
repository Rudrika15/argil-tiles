<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Catelogue;
use App\Models\Lvtproduct;
use App\Models\Quartzproduct;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function home()
    {
        return view('visitors.home.home');
    }
    public function profile()
    {
        return view('visitors.corporate.profile.profile');
    }
    public function about()
    {
        return view('visitors.corporate.about.about');
    }
    public function documentaryfilm()
    {
        return view('visitors.corporate.document.documentaryfilm');
    }
    public function corevalue()
    {
        return view('visitors.corporate.core value.corevalue');
    }
    public function groupcompany()
    {
        return view('visitors.corporate.group company.groupcompany');
    }
    public function achievement()
    {
        return view('visitors.corporate.achivement.achievment');
    }
    public function plants()
    {
        return view('visitors.corporate.plants.plants');
    }
    public function quality()
    {
        return view('visitors.corporate.quality.quality');
    }
    public function catalogue()
    {

        return view('visitors.catalogue.catalogue');
    }
    public function cantact()
    {
        return view('visitors.contacts.contact');
    }
    public function spcproducts()
    {
        $data = Lvtproduct::orderBy('id', 'desc')->get();
        return view('visitors.products.spc products.spcproducts',compact('data'));
    }
    public function spcproductinquiry($id){

        $data= Lvtproduct::find($id);

        return view('visitors.products.spc products.spcproductinquiry',compact('data'));
    }

    public function quartzsurface()
    {
        $data = Quartzproduct::orderBy('id', 'desc')->get();
        return view('visitors.products.quartz surface.quartzsurface',compact('data'));
    }
    public function quartzinquiry($id){

        $data= Quartzproduct::find($id);
        // $data= Lvtproduct::find($id);
        // return $data;
        return view('visitors.products.quartz surface.quartzsurfaceinquiry',compact('data'));
    }


}
