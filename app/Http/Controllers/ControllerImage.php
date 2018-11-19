<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\products;
use App\images;

use App\Http\Requests\ImageRequest;

class ControllerImage extends Controller
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getImageProduct(){
    	$images=images::all();
    	return view('admin.pageAdmin.imageProduct',compact('images'));
    }

	public function getAddImageProduct(){
		$parent=products::select('id','name')->get()->toArray();
    	return view('admin.pageAdmin.addImageProduct',compact('parent'));
    }

    public function postAddImageProduct(ImageRequest $req){
    	$file_image=$req->file('img')->getClientOriginalName();
        $img=new images;
        $img->image=$file_image;
        $img->id_product=$req->cmb_pro;
        $req->file('img')->move('image/products/',$file_image);
        $img->save();
        return redirect()->route('imageProduct')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add image']);
    }

    public function getEditImageProduct($id){
    	$data=images::find($id);
    	$parent=products::select('id','name')->get()->toArray();
    	return view('admin.pageAdmin.editImage',compact('parent','data'));
    }

    public function postEditImageProduct(ImageRequest $req,$id){
    	$img=images::find($id);
    	$file_image=$req->file('img')->getClientOriginalName();
        $img->image=$file_image;
        $img->id_product=$req->cmb_pro;
        $req->file('img')->move('image/products/',$file_image);
        $img->save();
        return redirect()->route('imageProduct')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update image']);
    }

    public function getDeleteImageProduct($id){
    	$img=images::find($id);
    	$img->delete($id);
    	return redirect()->route('imageProduct')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete image']);
    }
}


