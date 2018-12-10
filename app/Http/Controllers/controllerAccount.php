<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\users;
use App\Http\Requests\CateRequest;

class controllerAccount extends Controller
{
    public function getCustomer(){
    	$customers = users::where('id_type',1)->get();
    	return view('admin.pageAdmin.users.manaCustomer',compact('customers'));

    }
 
    public function getAddCustomer(){
    	return view('admin.pageAdmin.users.addCustomer');
    }

    public function postAddCustomer(Requests $req){
    	$customer=new users;
    	$customer->username=$req->txt_name;
    	$customer->password=$req->txt_password;
    	$customer->phone=$req->txt_phone;
    	$customer->email=$req->txt_email;
    	$customer->address=$req->txt_address;
    	$customer->gender=$req->txt_gender;
    	$customer->id_type=1;
    	$customer->save();
    	return redirect()->route('getAddCustomer')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add customer']);

    }
    public function geteditCustomer($id){
    	$data=users::find($id);
        //$parent=categories::select('id','name','image','descriptions')->get()->toArray();
        return view('admin.pageAdmin.users.editCustomer',compact('data'));
    }
    public function posteditCustomer(Requests $req,$id){
    	$customer=users::find($id);
    	$customer->username=$req->txt_name;
    	$customer->password=$req->txt_password;
    	$customer->phone=$req->txt_phone;
    	$customer->email=$req->txt_email;
    	$customer->address=$req->txt_address;
    	$customer->gender=$req->txt_gender;
    	$customer->id_type=1;
    	$customer->save();
    	return redirect()->route('getAddCustomer')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update customer']);

    }
    public function getdeleteCustomer($id){
    	$customer=users::find($id);
        $customer->delete($id);
        return redirect()->route('getCustomer')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete customer']);
    }
}
