<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mgt;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\mgtsworks;



class manmentController extends Controller
{
    //it's homecontroller on the index:(localhost:8000/home.blade.php)view page file
	public function index(){
    	$mgt = new mgt;
    	$mgt->name = request()->name;
    	$mgt->customerform = request()->customerform;
    	$mgt->detail = request()->detail;
        $user = User::find(Auth::id());
    	if($user->mgt()->save($mgt));{
    	return redirect('/show')->with('success','Management Create Successfully');
            // return redirect()->back()->with('success','Management Create Successfully');
        }
    }

    public function show(){
    	$mgts= mgt::where('user_id',auth()->user()->id)->get();
    	
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
        //     $mgts->delete();
        // return back()->with('success','Something Delete Successfully Allowed');

        try {
            $mgts->delete();
            return back()->with('success','Something Delete Successfully Allowed');
        } catch (\Illuminate\Database\QueryException $e) {
             return back()->with('danger','Something went wrong! Delete Not Allowed!');
        }             
    } 

    //it's your new from create and show on the file display (localhost:8000/site.blade.php)view page file 
    public function showform2(){
        $mgts= mgt::get()->all();
        return view('workmgts',compact('mgts'));
    }

    public function stored(){
        $tan = new mgtsworks;
        $tan->name = request()->name;
        $tan->mobile = request()->mobile;
        $tan->detail = request()->detail;
        $tan->save();
        return back()->with('success','Management Create Successfully');
    }

    public function viewshow(){
        $tan= mgtsworks::get()->all();
        return view('viewshow',compact('tan'));
    }  
    
}
