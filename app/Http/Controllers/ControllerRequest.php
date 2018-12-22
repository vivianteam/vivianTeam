<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\person_post_new;
use App\likes;
use App\comments;
use App\Http\Requests\PorsonRequest;

class ControllerRequest extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getRequest(){
    	$requests=person_post_new::all();
    	return view('admin.pageAdmin.request',compact('requests'));
    }

    public function getAddRequest(){
    	return view('admin.pageAdmin.addRequest');
    }

    public function postAddRequest(PorsonRequest $req){
    	$file_image=$req->file('img')->getClientOriginalName();
        $requests=new person_post_new;
        $requests->created_at=date("Y-m-d H:i:s");
        $requests->image=$file_image;
        $requests->description=$req->txt_Decription;
        $requests->id_user=$req->txt_IdUser;
        $req->file('img')->move('image/bogs/',$file_image);
        $requests->save();
        return redirect()->route('request')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add requests']);
    }

    public function getEditRequest($id){
        $data=person_post_new::find($id);
    	return view('admin.pageAdmin.editRequest',compact('data'));
    }

    public function postEditRequest(PorsonRequest $req,$id){

        $requests=person_post_new::find($id);
    	$file_image=$req->file('img')->getClientOriginalName();
        $requests->created_at=date("Y-m-d H:i:s");
        $requests->image=$file_image;
        $requests->description=$req->txt_Decription;
        $requests->id_user=$req->txt_IdUser;
        $req->file('img')->move('image/bogs/',$file_image);
        $requests->save();
        return redirect()->route('request')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete up[date requests']);
    }

    public function getDeleteRequest($id){
    	$requests=person_post_new::find($id);
        $requests->delete($id);
        return redirect()->route('request')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete requests']);
    }

    public function getManaComment(){
        $getComments=comments::all();
        return view('admin.pageAdmin.manaComment',compact('getComments'));
    }

    public function getDeleteComment($id){
        $requests=comments::find($id);
        $requests->delete($id);
        return redirect()->route('getManaComment')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete requests']);
    }
}
