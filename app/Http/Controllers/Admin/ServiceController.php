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
        $all_cat = Categories::all();
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


        
        $service = new Service();
        /*$service = $request->validate([
                                    
                                    'name' => 'required|string|unique:services',
                                    'cat_id' => 'required|string',
                                    'status' => 'required',
                                    'cat_id' => 'required'
        ]);*/
        $service->name = $request->name;
        $service->description = $request->description;
        $service->status = $request->status;
        $service->category_id = $request->cat_id;
        $service->save();
        // $service = Service::create($service);
        return redirect('admin/service')->with('success','Service Created Success');
    }

    /* tree view */

    public function  treeView()
    {
        $cat = Categories::with('service')->get();
       
        $tree = '<ul id="browser" class="filetree"><li class="tree-view"></li>';
        foreach($cat as $category){
             $tree .='<li class="tree-view closed"<a class="tree-name">'.$category->name.'</a>';
             if(!empty($category->service)) {
                $tree .=$this->childView($category);
        }
    }

     $tree .='<ul>';
    dd($tree);
     
    return view('service.index', compact('tree'));

}

public function childView($category){
    $html = '<ul>';
    foreach($category->service as $svc){
        if(!empty($svc->service)){
            $html .='<li class="tree-view closed"><a class="tree-name">' .$svc->name.'</a>';
                      $html.= $this->childView($svc);

        } else {
            $html .='<li class="tree-view"><a class="tree-name">'.$svc->name.'</a>';                                 
                        $html .="</li>";
        }
        
    }
    $html .="</ul>";
    return $html;
}
}

