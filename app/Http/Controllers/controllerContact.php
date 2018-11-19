<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\contacts;

class controllerContact extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getContact(){
    	$get_contacts=contacts::all();
    	return view('admin.pageAdmin.contact',compact('get_contacts'));
    }

    public function getDeleteContact($id){
    	$get_contacts=contacts::find($id);
    	$get_contacts->delete($id);
    	return redirect()->route('getContact')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete contact']);
    }
}
