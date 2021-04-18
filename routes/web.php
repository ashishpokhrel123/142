<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\BoardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;

use App\Models\Admin\Member;
use App\Models\Admin\Service;
use App\Models\Admin\About;
use App\Models\Admin\Board;
use App\Models\Admin\Investment;
use App\Models\Admin\Contact;
use App\Models\Admin\Categories;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//index route
    Route::get('/', function () 
        { 
            $members = member::all()->where('status',0);  
            return view('frontend.index',['members'=>$members]); 
        });

//about route
    Route::get('/about', function () 
        { 
            $abouts = About::all()->where('status',0);
            return view('frontend.about.index',['abouts'=>$abouts]); 
        });  

//service route
    Route::get('/service', function () 
        { 
            $services = Service::all()->where('status',0);
            $cat      = Categories::all()->where('status',0);
            return view('frontend.service.index',['services'=>$services,'cat'=>$cat]); 
        }); 
     Route::get('/viewservice', [ServiceController::class, 'treeView']); 

//board route
    Route::get('/board', function () 
        {
            $projects = Board::all()->where('status',0); 
            return view('frontend.board.index',['projects'=>$projects]); 
        });

//investment route
    Route::get('/investment', function () 
        { 
            return view('frontend.investment.index'); 
        });  

//contact route
    Route::get('/contact',[ContactController::class, 'index']);
    Route::post('/saveInquiry',[ContactController::class, 'saveInquiry']);
    Route::post('/saveFeedback',[ContactController::class, 'saveFeedback']);
 
    Auth::routes();
    Route::get('logout', [LoginController::class, 'logout']);

//admin dashboard
    Route::view('/admin', 'admin.index')->middleware('checkadmin');

//admin about
    Route::get('/admin/about',[AboutController::class, 'index']);
    Route::get('/admin/about/create',[AboutController::class, 'create']);
    Route::post('/addAbout',[AboutController::class,'add']);
    Route::get('/deleteAbout/{id}',[AboutController::class,'destroy']);

//admin service route
    Route::get('/admin/service',[ServiceController::class,'index']);
    Route::get('/admin/service/create',[ServiceController::class, 'create']);
    Route::get('/admin/service/createCat',[ServiceController::class, 'createCat']);
    Route::post('/addCat',[ServiceController::class,'addCat']); 
    Route::post('/addService',[ServiceController::class,'add']); 
    Route::get('/deleteService/{id}',[ServiceController::class,'destroy']);  
    Route::get('/deleteCat/{id}',[ServiceController::class,'destroyCat']);
   

//admin member route
    Route::get('/admin/member',[MemberController::class,'index']);
    Route::get('/admin/member/create',[MemberController::class, 'create']);
    Route::get('/admin/member/createDept',[MemberController::class, 'createDept']);
    Route::post('/addMember',[MemberController::class,'add']);       
    Route::post('/addDept',[MemberController::class,'addDept']);  
    Route::get('/deleteDept/{id}',[MemberController::class,'destroyDept']);    

//admin board route
    Route::get('/admin/board',[BoardController::class,'index']);  


