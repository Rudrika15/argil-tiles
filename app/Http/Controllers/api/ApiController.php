<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Catelogue;

use App\Models\Homepage;
use App\Models\Inquiry;
use App\Models\Contact;
use App\Models\Lvtproduct;
use App\Models\Newsroom;
use App\Models\Quartzproduct;
use App\Models\Wallproduct;
use App\Models\Slider;
use App\Models\User;
use App\Models\Stock;
use App\Models\Qsizemaster;
use App\Models\Usermaster;
use App\Models\Designtype;
use App\Models\Wsizemaster;
use App\Models\Finishtype;
use App\Models\Favorite;
use App\Models\NewArievels;
use App\Models\NewArrivals;

class apiController extends Controller
{
    function catelougeview($id = 0)
    {
        if ($id == 0) {
            $data = Catelogue::orderBy('id', 'desc')->get();
        } else {
            $data = Catelogue::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No Catelogue Found.."];
    }

    function favorite_add(Request $requset)
    {
        $fav = new Favorite();
        $fav->user_id = $requset->user_id;
        $fav->p_id = $requset->p_id;
        $fav->type = $requset->type;

        $fav->save();
        return $fav;
    }
    function favorite_remove(Request $requset)
    {
        $user_id = $requset->user_id;
        $p_id = $requset->p_id;
        $type = $requset->type;
        $fav = Favorite::where('p_id','=',$p_id)
                        ->where('type','=',$type)
                        ->where('user_id','=',$user_id)
                        ->get()->first();
        $fav->delete();
        return $fav;
    }
    function favorite_view($id)
    {
        $data = Favorite::orderBy('id', 'desc')
            ->where('user_id', '=', $id)
            ->get();
        if ($data)
            return $data;
        else
            return ['data' => "No  Found.."];
    }

    function register(Request $requset)
    {
        $um = new Usermaster();

        $um->name = $requset->name;
        $um->email = $requset->email;
        $um->password = $requset->password;
        $um->contact = $requset->contact;
        $um->save();
        return $um;
    }

 public function sendEmail($subject, $message)
        {

              $json_string = array('to' => array('sales@argiltiles.com','kushal@argiltiles.com','nirav@shoutnhike.com','jigar@shoutnhike.com', 'manoj@shoutnhike.com','vaishali@shoutnhike.com'));


                $params = array(
                        'to'        => "sales@argiltiles.com",
                        'toname'    => "Argil Tiles website ",
                        'from'      => "sales@argiltiles.com",
                        'fromname'  => "argil",
                        'subject'   => $subject,
                        'text'      => $message,
                        'html'      => $message,
                        'x-smtpapi' => json_encode($json_string),

                    );

                $request =  'https://api.sendgrid.com/api/mail.send.json';
                $sendgrid_apikey = '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';

                // Generate curl request
                $session = curl_init($request);
                // Tell PHP not to use SSLv3 (instead opting for TLS)
                curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
                curl_setopt($session, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $sendgrid_apikey));
                // Tell curl to use HTTP POST
                curl_setopt ($session, CURLOPT_POST, true);
                // Tell curl that this is the body of the POST
                curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
                // Tell curl not to return headers, but do return the response
                curl_setopt($session, CURLOPT_HEADER, false);
                curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

                // obtain response
                $response = curl_exec($session);
                curl_close($session);

                // print everything out
                return($response);


        }


    function contactus(Request $request){
        $name = $request->name;
        $email = $request->email;
        $contactno = $request->contactno;
        $message = $request->message;

        $ctc = new Contact();
        $ctc->name = $name;
        $ctc->email = $email;
        $ctc->contactno = $contactno;
        $ctc->message = $message;
        $ctc->save();


            $msg="Dear Sir/Madam,<br><br> You got a new Contact from ".$name .". Following are the  details:<br><br>";
        	$msg.="<br>Contact Person : ".$name;
	        $msg.="<br>Phone : ".$contactno;
	        $msg.="<br>Email : ".$email;
	        $msg.="<br>Body Message : " . $message;
	        $msg.="<br><br><b>Thank You.</b>";

	        $to = "sales@argiltiles.com";
            $subject = "Contact us ";

            // Always set content-type when sending HTML email
           // $headers = "MIME-Version: 1.0" . "\r\n";
           // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
           // $headers .= 'From: argil45k@argiltiles.com' . "\r\n";
          // $headers .= 'Cc: hardikprajapati23@outlook.com,jigar@shoutnhike.com,manoj@shoutnhike.com,vaishali@shoutnhike.com,kushalargil@gmail.com' . "\r\n";

           // mail($to,$subject,$msg,$headers);

            $responseEmail=$this->sendEmail($subject, $msg);

        return $ctc;
        // return $responseEmail;

    }
    function inquiry(Request $request){
        $productname = $request->productname;
        $name = $request->name;
        $email = $request->email;
        $contactno = $request->contactno;
        $message = $request->message;
        $type = $request->type;

        $inqr = new Inquiry();
        $inqr->subject= $productname;
        $inqr->name= $name;
        $inqr->email= $email;
        $inqr->phone= $contactno;
        $inqr->message= $message;
        $inqr->details= $type;
        $inqr->save();

            $msg="Dear Sir/Madam,<br><br> You got a new Inquiry from ".$name .". Following are the  details:<br><br>";
        	$msg.="<br>Contact Person : ".$name;
	        $msg.="<br>Phone : ".$contactno;
	        $msg.="<br>Email : ".$email;
	        $msg.="<br>Product : ".$productname . " type " . $type;
	        $msg.="<br>Body Message : " . $message;
	        $msg.="<br><br><b>Thank You.</b>";

            $subject = "Inquiry ";

            $responseEmail=$this->sendEmail($subject, $msg);

        return $inqr;
    }
    function forgot(Request $request){
        $email = $request->email;
        $contact = $request->contact;
    }

    function login(Request $requset)
    {
        $contact = $requset->contact;
        $password = $requset->password;
        $data = Usermaster::where('contact', '=', $contact)->where('password', '=', $password)->first();

        if ($data)

            return $data;
        else
            return ['data' => "No  Found.."];
    }

    function profile(Request $requset, $id)
    {

        $um =  Usermaster::find($id);
        $um->name = $requset->name;
        $um->email = $requset->email;
        $um->contact = $requset->contact;
        $um->save();
        return $um;
    }

    function changepassword(Request $requset, $id)
    {
        $oldpassword = $requset->oldpassword;
        $newpassword = $requset->newpassword;
        $um =  Usermaster::find($id);

        if ($um) {
            if ($um->password == $oldpassword) {
                $um->password = $newpassword;

                $um->save();
                return $um;
            } else {
                return ['data' => "Not Match Found.."];
            }
        } else {
            return ['data' => "No  Found.."];
        }
    }

    function usermasterview($id = 0)
    {
        $data = Usermaster::find($id);
        if ($data)
            return $data;
        else
            return ['data' => "No  Found.."];
    }

    function qsizematsterview($id = 0)
    {
        if ($id == 0) {
            $data = Qsizemaster::orderBy('size')->get();
        } else {
            $data = Qsizemaster::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No  Found.."];
    }
    function wsizematsterview($id = 0)
    {
        if ($id == 0) {
            $data = Wsizemaster::orderBy('size')->get();
        } else {
            $data = Wsizemaster::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No  Found.."];
    }
    function stockview($id = 0)
    {
        if ($id == 0) {
            $data = Stock::orderBy('stock')->get();
        } else {
            $data = Stock::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No  Found.."];
    }
    function designtypeview($id = 0)
    {
        if ($id == 0) {
            $data = Designtype::orderBy('type')->get();
        } else {
            $data = Designtype::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No  Found.."];
    }

    function finishtypeview($id = 0)
    {
        if ($id == 0) {
            $data = Finishtype::orderBy('type')->get();
        } else {
            $data = Finishtype::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No  Found.."];
    }


    function homeview($id = 0)
    {
        if ($id == 0) {
            $data = Homepage::orderBy('id', 'desc')->get();
        } else {
            $data = Homepage::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No Catelogue Found.."];
    }


    function inquiryview($id = 0)
    {
        if ($id == 0) {
            $data = Inquiry::orderBy('id', 'desc')->get();
        } else {
            $data = Inquiry::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No Inquiry Found.."];
    }


    function lvtproductview($id = 0)
    {
        if ($id == 0) {
            $data = Lvtproduct::orderBy('id', 'desc')->get();
        } else {
            $data = Lvtproduct::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No product Found.."];
    }


    function newsroomview($id = 0)
    {
        if ($id == 0) {
            $data = Newsroom::orderBy('id', 'desc')->get();
        } else {
            $data = Newsroom::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No Newsroom Found.."];
    }


    function quartzproductview($id = 0)
    {
        if ($id == 0) {
            $data = Quartzproduct::orderBy('id', 'desc')->get();
        } else {
            $data = Quartzproduct::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No Quartzproduct Found.."];
    }


    function wallproductview($id = 0)
    {
        if ($id == 0) {
            $data = Wallproduct::orderBy('id', 'desc')->get();
        } else {
            $data = Wallproduct::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No Quartzproduct Found.."];
    }

    function wallfilter(Request $request)
    {

        $size = Wsizemaster::all(["size"]);
        $finishtype = Finishtype::all(["type"]);
        $stock = Stock::all(["stock"]);
        $designtype = Designtype::all(["type"]);

        if ($request->size)
            $size = $request->size;

        if ($request->finishtype)
            $finishtype = $request->finishtype;

        if ($request->stock)
            $stock = $request->stock;

        if ($request->designtype)
            $designtype = $request->designtype;

        $data = Wallproduct::whereIn('size', $size)
            ->whereIn('stock', $stock)
            ->whereIn('finishType', $finishtype)
            ->whereIn('designType', $designtype)
            ->paginate(8);


    // product code filter
		if($request->productcode){
			$data = Wallproduct::where('name','=', $request->productcode)
            ->paginate(8);
		}



        // print_r($stock);
        if ($request->user_id) {
            for ($i = 0; $i < count($data); $i++) {
                $fav = Favorite::where('user_id', '=', $request->user_id)
                    ->where('p_id', '=', $data[$i]['id'])
                    ->where('type', '=', 'Wall')
                    ->get();
                if ($fav->count() > 0) {
                    $data[$i]['favid'] = $fav[0]['id'];
                    $data[$i]['isfav'] = true;
                } else {
                    $data[$i]['favid'] = 0;
                    $data[$i]['isfav'] = false;
                }
            }
            return $data;
        } else {
            return $data;
        }
    }


    function quartzfilter($id = 0)
    {

        $data = Quartzproduct::orderBy('id', 'desc')->paginate(8);

        for ($i = 0; $i < count($data); $i++) {
            $fav = Favorite::where('user_id', '=', $id)
                ->where('p_id', '=', $data[$i]['id'])
                ->where('type', '=', 'Quartz')
                ->get();
            if ($fav->count() > 0) {
                $data[$i]['favid'] = $fav[0]['id'];
                $data[$i]['isfav'] = true;
            } else {
                $data[$i]['favid'] = 0;
                $data[$i]['isfav'] = false;
            }
        }
        return $data;
    }

    function spcfilter($id = 0)
    {

        $data = Lvtproduct::orderBy('id', 'desc')->paginate(8);

        for ($i = 0; $i < count($data); $i++) {
            $fav = Favorite::where('user_id', '=', $id)
                ->where('p_id', '=', $data[$i]['id'])
                ->where('type', '=', 'SPC')
                ->get();
                if($fav->count() > 0)
                {
                      $data[$i]['favid']=$fav[0]['id'];
                      $data[$i]['isfav']=true;
                }
              else
              {
                  $data[$i]['favid']=0;
                  $data[$i]['isfav']=false;
              }
        }
        return $data;
    }

    function sliderview($id = 0)
    {
        if ($id == 0) {
            $data = Slider::orderBy('id', 'desc')->get();
        } else {
            $data = Slider::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No Slider Found.."];
    }

    function newarrivalsview($id = 0)
    {
        if ($id == 0) {
            $data = NewArrivals::orderBy('id', 'desc')->get();
        } else {
            $data = NewArrivals::find($id);
        }
        if ($data)
            return $data;
        else
            return ['data' => "No New Arievels Found.."];
    }

}
