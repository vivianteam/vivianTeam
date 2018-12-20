<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\smallCategories;
use App\categories;
use App\products;
use App\Http\Requests\SmallCateRequest;

class ControllerSmallCategories extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getSmallCategories(){
        $smallcategories = smallcategories::all();
      return view('admin.pageAdmin.smallCategory',['smallcategories' => $smallcategories]);
    }

    public function getAddSmallCategories(){
        $parent=categories::select('id','name')->get()->toArray();
    	return view('admin.pageAdmin.addSmallCategory',compact('parent'));
    }

    public function postAddSmallCategories(SmallCateRequest $req){
    	$smallcate=new smallcategories;
    	$smallcate->nameSmallCate=$req->txt_SmallCateName;
    	$smallcate->descriptions=$req->txt_SmallCateDecription;
    	$smallcate->id_category=$req->txt_CateName;
    	$smallcate->save();
    	return redirect()->route('smallCategory')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add small category']);
    }

    public function getDeleteSmallCategory($id){
        $parent=products::where('id_small_categories',$id)->count();
        if($parent==0){
            $cate=smallcategories::find($id);
            $cate->delete($id);
            return redirect()->route('smallCategory')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete small category']);
        }
        else{
            echo"<script type='text/javascript'>
                alert('Sorry ! You can Not Delete This Small Category');
                window.location='";
                echo route('smallCategory');
            echo"'</script>";
        }
    }

    public function getEditSmallCategory($id){
    	$data=smallcategories::find($id);
    	$parent=smallcategories::select('id','nameSmallCate','descriptions','id_category')->get()->toArray();
    	return view('admin.pageAdmin.editSmallCategory',compact('data','parent','id'));
    }

    public function postEditSmallCategory(SmallCateRequest $req,$id){
    	$smallcate=smallcategories::find($id);
    	$smallcate->nameSmallCate=$req->txt_SmallCateName;
    	$smallcate->descriptions=$req->txt_SmallCateDecription;
    	$smallcate->id_category=$req->txt_CateName;
    	$smallcate->save();
    	return redirect()->route('smallCategory')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update Small category']);

    }
}
