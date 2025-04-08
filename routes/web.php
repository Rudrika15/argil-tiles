<?php

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\visitors\VisitorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CatelogueController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\InquiryController;
use App\Http\Controllers\admin\LvtController;
use App\Http\Controllers\admin\NewsRoomController;
use App\Http\Controllers\admin\QuartzController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\WallController;
use App\Http\Controllers\admin\FinshtypeController;
use App\Http\Controllers\admin\DesigntypeController;
use App\Http\Controllers\admin\QsizemasterController;
use App\Http\Controllers\admin\WsizemasterController;
use App\Http\Controllers\admin\SsizemasterController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\StockController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\visitors\ContactController;



// ====================== admin ======================

// Route::get('/', function () {
//     return view('home');
// });

// login

Route::get("login", [UserController::class, 'login'])->name("login");

Route::post("login-user", [UserController::class, 'loginUser'])->name('login-user');
// Route::get("loginshow",[AdminloginController::class,'login'])->name('loginshow');

// Logout
Route::get("/logout", [UserController::class, 'logout'])->name('logout');


// end Logout

// end login

Route::middleware('auth:web')->group(function () {
    Route::get('dashboard',[UserCOntroller::class,'dashboardpage'])->name('dashboard');
    // Route::get("", [DashboardController::class, 'index'])->name('dashboard');
    // Route::get("dashboard", [DashboardController::class, 'index'])->name('dashboard');
    //cat Start
    Route::get("catelogueshow", [CatelogueController::class, 'index'])->name('catelogueshow');
    Route::get("cateloguecreate", [CatelogueController::class, 'create'])->name('cateloguecreate');
    Route::post("catelogue/editcode", [CatelogueController::class, 'editcode'])->name('catelogue.editcode');
    Route::get("catelogue/edit/{id}", [CatelogueController::class, 'edit'])->name('catelogue.edit');
    Route::post("cateloguestore", [CatelogueController::class, 'store'])->name('cateloguestore');
    Route::get("catelogue/delete/{id}", [CatelogueController::class, 'delete'])->name('catelogue.delete');
    // cat End

    // home Start
    Route::get("homeshow", [HomeController::class, 'index'])->name('homeshow');
    Route::get("homecreate", [HomeController::class, 'create'])->name('homecreate');
    Route::post("home/editcode", [HomeController::class, 'editcode'])->name('home.editcode');
    Route::get("home/edit/{id}", [HomeController::class, 'edit'])->name('home.edit');
    Route::post("homestore", [HomeController::class, 'store'])->name('homestore');
    Route::get("home/delete/{id}", [HomeController::class, 'delete'])->name('home.delete');
    // home End

    // Inquiry Start
    Route::get("inquiryshow", [InquiryController::class, 'index'])->name('inquiryshow');
    Route::get("inquiry/edit/{id}", [InquiryController::class, 'edit'])->name('inquiry.edit');
    Route::get("inquirycreate", [InquiryController::class, 'create'])->name('inquirycreate');
    Route::post("inquiry/editcode", [InquiryController::class, 'editcode'])->name('inquiry.editcode');
    Route::post("inquirystore", [InquiryController::class, 'store'])->name('inquirystore');
    Route::get("inquiry/delete/{id}", [InquiryController::class, 'delete'])->name('inquiry.delete');
    // Inquiry End

    // contact us
    Route::get("contactshow", [InquiryController::class, 'contactshow'])->name('contactshow');
    Route::get("inquiry/conactdelete/{id}", [InquiryController::class, 'contactdelete'])->name('inquiry.contactdelete');


    // LVT Start
    Route::get("lvtshow", [LvtController::class, 'index'])->name('lvtshow');
    Route::get("lvt/edit/{id}", [LvtController::class, 'edit'])->name('lvt.edit');
    Route::get("lvtcreate", [LvtController::class, 'create'])->name('lvtcreate');
    Route::post("lvt/editcode", [LvtController::class, 'editcode'])->name('lvt.editcode');
    Route::post("lvtstore", [LvtController::class, 'store'])->name('lvtstore');
    Route::get("lvt/delete/{id}", [LvtController::class, 'delete'])->name('lvt.delete');
    // LVT End

    // NEWSROOM Start
    Route::get("newsroomshow", [NewsRoomController::class, 'index'])->name('newsroomshow');
    Route::get("newsroomcreate", [NewsRoomController::class, 'create'])->name('newsroomcreate');
    Route::get("newsroom/edit/{id}", [NewsRoomController::class, 'edit'])->name('newsroom.edit');
    Route::post("newsroomstore", [NewsRoomController::class, 'store'])->name('newsroomstore');
    Route::post("newsroom/editcode", [NewsRoomController::class, 'editcode'])->name('newsrooms.editcode');
    Route::get("newsroom/delete/{id}", [NewsRoomController::class, 'delete'])->name('newsroom.delete');
    // NEWSROOM End


    // Quartz Start
    Route::get("quartzshow", [QuartzController::class, 'index'])->name('quartzshow');
    Route::get("quartz/edit/{id}", [QuartzController::class, 'edit'])->name('quartz.edit');
    Route::get("quartzcreate", [QuartzController::class, 'create'])->name('quartzcreate');
    Route::post("quartz/editcode", [QuartzController::class, 'editcode'])->name('quartz.editcode');
    Route::post("quartzstore", [QuartzController::class, 'store'])->name('quartzstore');
    Route::get("quartz/delete/{id}", [QuartzController::class, 'delete'])->name('quartz.delete');
    // Quartz End


    // Slider Start
    Route::get("slidershow", [SliderController::class, 'index'])->name('slidershow');
    Route::post("sliderstore", [SliderController::class, 'store'])->name('sliderstore');
    Route::get("slider/edit/{id}", [SliderController::class, 'edit'])->name('slider.edit');
    Route::get("slidercreate", [SliderController::class, 'create'])->name('slidercreate');
    Route::post("slider/editcode", [SliderController::class, 'editcode'])->name('slider.editcode');
    Route::get("slideredit", [SliderController::class, 'edit'])->name('slideredit');
    Route::get("slider/delete/{id}", [SliderController::class, 'delete'])->name('slider.delete');
    // Slider End


    // Wall Start
    Route::get("wallshow", [WallController::class, 'index'])->name('wallshow');
    Route::get("wall/edit/{id}", [WallController::class, 'edit'])->name('wall.edit');
    Route::get("wallcreate", [WallController::class, 'create'])->name('wallcreate');
    Route::post("wall/editcode", [WallController::class, 'editcode'])->name('wall.editcode');
    Route::post("wallstore", [WallController::class, 'store'])->name('wallstore');
    Route::get("walledit", [WallController::class, 'edit'])->name('walledit');
    Route::get("wall/delete/{id}", [WallController::class, 'delete'])->name('wall.delete');
    // Wall Start


    // finish type start

    Route::get("finishtypeshow", [FinshtypeController::class, 'index'])->name('finishtypeshow');
    Route::get("finishtype/edit/{id}", [FinshtypeController::class, 'edit'])->name('finishtype.edit');
    Route::get("finishtypecreate", [FinshtypeController::class, 'create'])->name('finishtypecreate');
    Route::post("finishtype/editcode", [FinshtypeController::class, 'editcode'])->name('finishtype.editcode');
    Route::post("finishtypestore", [FinshtypeController::class, 'store'])->name('finishtypestore');
    Route::get("finishtypeedit", [FinshtypeController::class, 'edit'])->name('finishtypeedit');
    Route::get("finishtype/delete/{id}", [FinshtypeController::class, 'delete'])->name('finishtype.delete');

    // finish type end



    // designtype start
    Route::get("designtypeshow", [DesigntypeController::class, 'index'])->name('designtypeshow');
    Route::get("designtype/edit/{id}", [DesigntypeController::class, 'edit'])->name('designtype.edit');
    Route::get("designtypecreate", [DesigntypeController::class, 'create'])->name('designtypecreate');
    Route::post("designtype/editcode", [DesigntypeController::class, 'editcode'])->name('designtype.editcode');
    Route::post("designtypestore", [DesigntypeController::class, 'store'])->name('designtypestore');
    Route::get("designtypeedit", [DesigntypeController::class, 'edit'])->name('designtypeedit');
    Route::get("designtype/delete/{id}", [DesigntypeController::class, 'delete'])->name('designtype.delete');


    //design type end


    // q size start
    Route::get("qsizeshow", [QsizemasterController::class, 'index'])->name('qsizeshow');
    Route::get("qsize/edit/{id}", [QsizemasterController::class, 'edit'])->name('qsize.edit');
    Route::get("qsizecreate", [QsizemasterController::class, 'create'])->name('qsizecreate');
    Route::post("qsize/editcode", [QsizemasterController::class, 'editcode'])->name('qsize.editcode');
    Route::post("qsizestore", [QsizemasterController::class, 'store'])->name('qsizestore');
    Route::get("qsizeedit", [QsizemasterController::class, 'edit'])->name('qsizeedit');
    Route::get("qsize/delete/{id}", [QsizemasterController::class, 'delete'])->name('qsize.delete');


    // q size end

    // w size master start
    Route::get("wsizeshow", [WsizemasterController::class, 'index'])->name('wsizeshow');
    Route::get("wsize/edit/{id}", [WsizemasterController::class, 'edit'])->name('wsize.edit');
    Route::get("wsizecreate", [WsizemasterController::class, 'create'])->name('wsizecreate');
    Route::post("wsize/editcode", [WsizemasterController::class, 'editcode'])->name('wsize.editcode');
    Route::post("wsizestore", [WsizemasterController::class, 'store'])->name('wsizestore');
    Route::get("wsizeedit", [WsizemasterController::class, 'edit'])->name('wsizeedit');
    Route::get("wsize/delete/{id}", [WsizemasterController::class, 'delete'])->name('wsize.delete');

    // s size master start
    Route::get("ssizeshow", [SsizemasterController::class, 'index'])->name('ssizeshow');
    Route::get("ssize/edit/{id}", [SsizemasterController::class, 'edit'])->name('ssize.edit');
    Route::get("ssizecreate", [SsizemasterController::class, 'create'])->name('ssizecreate');
    Route::post("ssize/editcode", [SsizemasterController::class, 'editcode'])->name('ssize.editcode');
    Route::post("ssizestore", [SsizemasterController::class, 'store'])->name('ssizestore');
    Route::get("ssizeedit", [SsizemasterController::class, 'edit'])->name('ssizeedit');
    Route::get("ssize/delete/{id}", [SsizemasterController::class, 'delete'])->name('ssize.delete');

    // stock
    Route::get("stockshow", [StockController::class, 'index'])->name('stockshow');
    Route::get("stock/edit/{id}", [StockController::class, 'edit'])->name('stock.edit');
    Route::get("stockcreate", [StockController::class, 'create'])->name('stockcreate');
    Route::post("stock/editcode", [StockController::class, 'editcode'])->name('stock.editcode');
    Route::post("stockstore", [StockController::class, 'store'])->name('stockstore');
    Route::get("stockedit", [StockController::class, 'edit'])->name('stockedit');
    Route::get("stock/delete/{id}", [StockController::class, 'delete'])->name('stock.delete');

    //Blog
    Route::get("blog",[BlogController::class,'index'])->name('blog');
    Route::get("blog.create",[BlogController::class,'create'])->name('blog.create');
    Route::post("blog.store",[BlogController::class,'store'])->name('blog.store');
    Route::get("blog.edit/{id}",[BlogController::class,'edit'])->name('blog.edit');
    Route::post("blog.update/{id}",[BlogController::class,'update'])->name('blog.update');
    Route::get("blog.delete/{id}",[BlogController::class,'destroy'])->name('blog.delete');


});




// ====================== visitors ======================

Route::get('/',[VisitorController::class,'home']);
Route::get('/profile',[VisitorController::class,'profile']);
Route::get('/about',[VisitorController::class,'about']);
Route::get('/documentaryfilm',[VisitorController::class,'documentaryfilm']);
Route::get('/corevalues',[VisitorController::class,'corevalue']);
Route::get('/groupcompany',[VisitorController::class,'groupcompany']);
Route::get('/achievements',[VisitorController::class,'achievement']);
Route::get('/plants',[VisitorController::class,'plants']);
Route::get('/quality',[VisitorController::class,'quality']);
Route::get('/catalogue',[VisitorController::class,'catalogue']);
Route::get('/contact',[VisitorController::class,'contact']);
Route::get('/spcproducts',[VisitorController::class,'spcproducts']);
Route::get('spcproductinquiry/{id?}',[VisitorController::class,'spcproductinquiry'])->name('spcproductinquiry');
Route::get('quartzinquiry/{id}',[VisitorController::class,'quartzinquiry'])->name('quartzinquiry');
// Route::get('quartzinquiry/{slug?}',[VisitorController::class,'quartzinquiry'])->name('quartzinquiry');
Route::get('/quartzsurface',[VisitorController::class,'quartzsurface']);
Route::get('/privacyPolicy',[VisitorController::class,'privacyPolicy']);

// Route::post('/send-mail',[ContactController::class,'sendMail'])->name('send.mail');
// Route::get('send-mail', [MailController::class, 'index']);



Route::post('/send-mail', [VisitorController::class, 'sendEmail'])->name('send.mail');






