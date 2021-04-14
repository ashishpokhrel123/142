<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Categories;
use App\Models\Admin\Service;

class ServiceController extends Controller
{
   

    //index route
    public function index()
    {

        $all_data = Categories::all();
        return view('admin.service.index', compact('all_data'));
        
        
   
    }

    public function viewService()
    {
        $category = Categories::with('service')->get();
        dd($category);
        return view('service.index', compact('category'));
    }

//create service
public function create()
    {
        $all_cat = categories::all();
        return view('admin.service.create',['all_cat'=>$all_cat]);
    }

//create categories    
public function createCat()
    {
        return view('admin.service.createCat');
    }    




//delete data from server
public function destroy($id)
{
$destroy_data=Service::find($id)->delete();
return redirect('admin/service')->with('success','Data Remove Success');

}      

//add category
public function addCat(Request $request)
{
$cat = new Categories();

$cat = $request->validate([
                                    'name'=>'required|string|unique:categories',
                                    'status'=>'required',
                                ]);

Categories::insert($cat);
return redirect('admin/service')->with('success','Category Added Success');

}  

//delete data from server
public function destroyCat($id)
{

$destroy_data=Categories::find($id)->delete();

return redirect('admin/service')->with('success','Category Remove Success');

}    

//add data    
public function add(Request $request)
    {


        
       
        $service = $request->validate([
                                    
                                    'name' => 'required|string|unique:services',
                                    'description' => 'required|string',
                                    'status' => 'required',
        ]);
        Categories::find($request->cat_id)->service()->create($service);
        // $service = Service::create($service);
        return redirect('admin/service')->with('success','Service Created Success');
    }

}
