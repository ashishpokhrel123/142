<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(){
        return view('admin.board.index');
    }

    public function boardView(){

        $department = MemberDept::with('member')->get();
        $tree = '<ul id="browser" class="filetree"><li class="tree-view"></li>';
        foreach($department as $dept){
             $tree .='<li class="tree-view closed"<a class="tree-name">'.$dept->name.'</a>';
             if(!empty($dept->name)) {
                $tree .=$this->childView($dept);
        }
    }
     $tree .='<ul>';
    dd($tree);
     
    //return view('service.index', compact('tree'));
}
public function childView($dept){
    $html = '<ul>';
    foreach($dept->member as $members){
        if(!empty($members->member)){
            $html .='<li class="tree-view closed"><a class="tree-name">' .$members->name.'</a>';
                      $html.= $this->childView($members);

        } else {
            $html .='<li class="tree-view"><a class="tree-name">'.$members->name.'</a>';                                 
                        $html .="</li>";
        }
        
    }
    $html .="</ul>";
    return $html;
}


}
