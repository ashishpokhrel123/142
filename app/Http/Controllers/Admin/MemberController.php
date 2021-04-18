<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Member;
use App\Models\Admin\MemberDept;

class MemberController extends Controller
{
    public function index(){

        $members = Member::all();
        $all_dept = MemberDept::all();
        
        return view('admin.member.index',['members'=>$members,'all_dept'=>$all_dept]);
    }

    public function create(){
        $allDept = MemberDept::all();
        return view('admin.member.create',compact('allDept'));
    } 

    public function createDept()
        {
            
            return view('admin.member.createDept');
        }    

    
    public function add(Request $request){
    
        $member = new Member();

        $member = $request->validate([
            'name' => 'required|string',
            'department' => 'required|string',
            'position' => 'required|string',
            'avatar' => 'required|integer',
            'status' => 'required|integer',
        ]);

        $member=Member::create($request->all());
        return redirect('admin/member')->with('success','New Member Added Successfully !!');

}
 //add Dept
 public function addDept(Request $request)
 {
    
     $memberDept = $request->validate([
                                        'name'=>'required|string|unique:member_dept',
                                        'status'=>'required|integer',
                                     ]);
        
    // $memberDept = explode(',', $request->input('name'));

            $memberDept = MemberDept::create($request->all());
            return redirect('admin/member')->with('success','Department Added Success !!');

    }  
 
  //delete data from server
  public function destroyDept($id)
  {

      $destroy_dept=MemberDept::find($id)->delete();

      return redirect('admin/member')->with('success','Department Remove Success');

  }    

}

