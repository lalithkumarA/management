<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mgt;


class manmentController extends Controller
{
	public function index(){
    	$system = new mgt;
    	$system->name = request()->name;
    	$system->customerform = request()->customerform;
    	$system->detail = request()->detail;
    	$system->save();
    	return redirect('/show')->with('success','Management Create Successfully');
    }

    public function show(){
    	$mgts= mgt::get()->all();
    	
        return view('show',compact('mgts'));
    }

    public function edit($id){
        $mgts = mgt::findOrfail($id);
        return view('edit',compact('mgts'));
    }

    public function update($id, Request $request){      
        $mgts = mgt::findorfail($id);
        $mgts->name = request('name');
        $mgts->customerform = request('customerform');
        $mgts->detail = request('detail');
        $mgts->save();
        return redirect('/show')->with('success','Updated Successfully');
    }

    public function delete($id){
        $mgts = mgt::findOrfail($id);
            $mgts->delete();
        return back()->with('success','Something Delete Successfully Allowed');           
    }   
    
}
