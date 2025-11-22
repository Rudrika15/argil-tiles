<?php

namespace App\Http\Controllers\api;

use App\Helper\Util;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
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
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class apiController extends Controller
{
    function catelougeview($id = 0)
    {
        if ($id == 0) {
            $data = Catelogue::orderBy('id', 'desc')->get();
        } else {
            $data = Catelogue::find($id);
        }

        return Util::getSuccessMessage('Success', $data);
    }

    function favorite_add(Request $requset)
    {
        $fav = new Favorite();
        $fav->user_id = $requset->user_id;
        $fav->p_id = $requset->p_id;
        $fav->type = $requset->type;

        $fav->save();
        return Util::getSuccessMessage('Success', $fav);
    }
    function favorite_remove(Request $requset)
    {
        $user_id = $requset->user_id;
        $p_id = $requset->p_id;
        $type = $requset->type;
        $fav = Favorite::where('p_id', '=', $p_id)
            ->where('type', '=', $type)
            ->where('user_id', '=', $user_id)
            ->get()->first();
        $fav->delete();
        return Util::getSuccessMessage('Success', $fav);
    }
    function favorite_view($id)
    {
        $data = Favorite::orderBy('id', 'desc')
            ->where('user_id', '=', $id)
            ->get();

        return Util::getSuccessMessage('Success', $data);
    }

    function register(Request $requset)
    {
        $um = new Usermaster();

        $um->name = $requset->name;
        $um->email = $requset->email;
        $um->password = $requset->password;
        $um->contact = $requset->contact;
        $um->save();

        return Util::getSuccessMessage('Register Successfully', $um);
    }

    public function sendEmail($subject, $message)
    {

        $json_string = array('to' => array('sales@argiltiles.com', 'kushal@argiltiles.com', 'nirav@shoutnhike.com', 'jigar@shoutnhike.com', 'manoj@shoutnhike.com', 'vaishali@shoutnhike.com'));


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
        curl_setopt($session, CURLOPT_POST, true);
        // Tell curl that this is the body of the POST
        curl_setopt($session, CURLOPT_POSTFIELDS, $params);
        // Tell curl not to return headers, but do return the response
        curl_setopt($session, CURLOPT_HEADER, false);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        // obtain response
        $response = curl_exec($session);
        curl_close($session);

        // print everything out
        return Util::getSuccessMessage('Success',  $response);
    }


    function contactus(Request $request)
    {
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

        // Send the email using the ContactFormMail Mailable
        Mail::to('social.media@argiltiles.com')  // Replace with your own email address
            ->send(new ContactFormMail($name, $email, $contactno, $message));

        return Util::getSuccessMessage('Message Sent Successfully', $ctc);
    }
    function inquiry(Request $request)
    {

        $productname = $request->productname;
        $name = $request->name;
        $email = $request->email;
        $contactno = $request->contactno;
        $message = $request->message;
        $details = $request->details;
        $subject = $request->subject;

        $inqr = new Inquiry();
        $inqr->subject = $productname;
        $inqr->name = $name;
        $inqr->email = $email;
        $inqr->phone = $contactno;
        $inqr->message = $message;
        $inqr->details = $details;
        $inqr->subject = $subject;
        $inqr->save();

        // email code here
        Mail::to('social.media@argiltiles.com')  // Replace with your own email address
            ->send(new ContactFormMail($name, $email, $contactno, $message));

        return Util::getSuccessMessage('Inquiry Sent Successfully', $inqr);
    }
    function forgot(Request $request)
    {
        $email = $request->email;
        $contact = $request->contact;
    }

    // function login(Request $requset)
    // {
    //     $contact = $requset->contact;
    //     $password = $requset->password;
    //     $data = Usermaster::where('contact', '=', $contact)->where('password', '=', $password)->first();


    //     return Util::getSuccessMessage($data, 'Login Successfully');
    // }


    function profile(Request $requset, $id)
    {

        $um =  Usermaster::find($id);
        $um->name = $requset->name;
        $um->email = $requset->email;
        $um->contact = $requset->contact;
        $um->save();
        return Util::getSuccessMessage('Profile Updated Successfully', $um);
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
                return Util::getSuccessMessage('Password Updated Successfully', $um);
            } else {
                return Util::getErrorMessage('Old Password Not Match',);
            }
        } else {
            return ['data' => "No  Found.."];
        }
    }

    function usermasterview($id = 0)
    {
        $data = Usermaster::find($id);
        if ($data)
            return Util::getSuccessMessage($data, 'User Found Successfully');
        else
            return Util::getErrorMessage($data, 'User Not Found');
    }

    function qsizematsterview($id = 0)
    {
        if ($id == 0) {
            $data = Qsizemaster::orderBy('size')->get();
        } else {
            $data = Qsizemaster::find($id);
        }
        if ($data)
            return Util::getSuccessMessage('Quartz Size Fetched Successfully', $data);
        else
            return Util::getErrorMessage('Quartz Size Not Found', $data);
    }
    function wsizematsterview($id = 0)
    {
        if ($id == 0) {
            $data = Wsizemaster::orderBy('size')->get();
        } else {
            $data = Wsizemaster::find($id);
        }
        return Util::getSuccessMessage('Wall Size Fetched Successfully', $data);
    }
    function stockview($id = 0)
    {
        if ($id == 0) {
            $data = Stock::orderBy('stock')->get();
        } else {
            $data = Stock::find($id);
        }

        return Util::getSuccessMessage(' User Found Successfully', $data);
    }
    function designtypeview($id = 0)
    {
        if ($id == 0) {
            $data = Designtype::orderBy('type')->get();
        } else {
            $data = Designtype::find($id);
        }

        return Util::getSuccessMessage(' User Found Successfully', $data);
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
            $data = Lvtproduct::orderBy('names')->get();
        } else {
            $data = Lvtproduct::find($id);
        }
        return Util::getSuccessMessage('Lvtproduct Fetched Successfully', $data);
    }
    function lvtproductviewpagination(Request $request, $id = 0)
    {
        if ($id == 0) {
            $query = Lvtproduct::orderBy('names');

            // 🔍 Filter by name (starts with or contains)
            if (!empty($request->q)) {
                $query->where('names', 'like', '%' . $request->q . '%');
            }

            $data = $query->paginate(6); // use paginate if you want pagination
        } else {
            $data = Lvtproduct::find($id);
        }

        return Util::getSuccessMessage('Lvtproduct Fetched Successfully', $data);
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


    // function quartzproductview($id = 0)
    // {
    //     if ($id == 0) {
    //         $data = Quartzproduct::orderBy('id', 'desc')->get();
    //     } else {
    //         $data = Quartzproduct::find($id);
    //     }
    //     return Util::getSuccessMessage('Quartzproduct Fetched Successfully', $data);
    // }
    // function quartzproductviewpagination($id = 0)
    // {
    //     if ($id == 0) {
    //         $data = Quartzproduct::orderBy('id', 'desc')->paginate(6);
    //     } else {
    //         $data = Quartzproduct::find($id);
    //     }
    //     return Util::getSuccessMessage('Quartzproduct Fetched Successfully', $data);
    // }
    function quartzproductviewpagination(Request $request, $id = 0)
    {
        if ($id == 0) {
            $query = Quartzproduct::orderBy('id', 'desc');

            // 🔍 Filter by name if "q" is passed
            if (!empty($request->q)) {
                $query->where('name', 'like', '%' . $request->q . '%');
            }

            $data = $query->paginate(6);
        } else {
            $data = Quartzproduct::find($id);
        }

        return Util::getSuccessMessage('Quartzproduct Fetched Successfully', $data);
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
        if ($request->productcode) {
            $data = Wallproduct::where('name', '=', $request->productcode)
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

    function sliderview($id = 0)
    {
        if ($id == 0) {
            $data = Slider::orderBy('id', 'desc')->get();
        } else {
            $data = Slider::find($id);
        }
        return Util::getSuccessMessage('Slider Fetched Successfully', $data);
    }

    // function newarrivalsview()
    // {
    //     $data = NewArrivals::orderBy('id', 'desc')->first();
    //     $url = $data->navigate_url;

    //     // Extract path and split into segments
    //     $path = parse_url($url, PHP_URL_PATH);
    //     $segments = explode('/', trim($path, '/'));

    //     $productId = 0;
    //     $quartzproduct = null;
    //     $wallproduct = null;

    //     $index = array_search('quartzproduct', $segments);
    //     if ($index !== false && isset($segments[$index + 1])) {
    //         $productId = $segments[$index + 1];

    //         // Fetch quartz product
    //         $quartzproduct = Quartzproduct::find($productId);
    //         if ($quartzproduct) {
    //             return Util::getSuccessMessage('Quartz Product Fetched Successfully', [$quartzproduct, $data]);
    //         }
    //     } else {
    //         // Try to detect wallproduct and get its ID
    //         $index = array_search('wallproduct', $segments);
    //         if ($index !== false && isset($segments[$index + 1])) {
    //             $productId = $segments[$index + 1];
    //             $wallproduct = Wallproduct::find($productId);
    //             if ($wallproduct) {
    //                 return Util::getSuccessMessage('Wall Product Fetched Successfully', [$wallproduct, $data]);
    //             }
    //         }
    //     }

    //     // Fallback response
    //     return response()->json([
    //         'status' => false,
    //         'message' => 'Product not found.',
    //         'data' => [
    //             'url' => $url,
    //             'newarrival' => $data,
    //             'quartzproduct' => $quartzproduct,
    //             'wallproduct' => $wallproduct
    //         ]
    //     ]);
    // }

    function newarrivalsview()
    {
        try {
            $data = NewArrivals::orderBy('id', 'desc')->first();
            $data->image = 'newarieles/' . $data->image;
            return Util::getSuccessMessage('New Arrivals Fetched Successfully', $data);
        } catch (Exception $e) {
            return Util::getErrorMessage('New Arrivals Not Found', $e);
        }
    }
    public function dashboard()
    {
        if (!Auth::user()) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized',
            ]);
        }

        $inquiryCount = Inquiry::count();
        $contactCount = Contact::count();

        // $inquiryDate = Inquiry::orderBy('created_at', 'desc')->get();
        $inquiryDate = Inquiry::orderBy('created_at', 'desc')
            ->limit(50)
            ->get();

        $contactDate = Contact::orderBy('created_at', 'desc')
            ->limit(50)
            ->get();
        return response()->json([
            'status' => true,
            'message' => 'Dashboard Fetched Successfully',
            'data' => [
                'inquiryCount' => $inquiryCount,
                'contactCount' => $contactCount,
                'inquiryData' => $inquiryDate,
                'contactData' => $contactDate,
            ],

        ]);
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Create token
            $tokenResult = $user->createToken('auth_token');
            $token = $tokenResult->plainTextToken;

            // Update token expiration manually
            $tokenResult->accessToken->expires_at = Carbon::now()->addYear();
            $tokenResult->accessToken->save();

            return Util::getSuccessMessage('Login Successfully', ["user" => $user, "token" => $token]);
        }

        return Util::getErrorMessage('Login Failed', 'Invalid Credentials');
    }
}
