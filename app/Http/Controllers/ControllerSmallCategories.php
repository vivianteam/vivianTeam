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
use Illuminate\Http\Request;
use App\Http\Requests\SmallCateRequest;
use Illuminate\Support\Facades\DB;

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

    public function postAddSmallCategories(Request $req){
    	$smallcate=new smallcategories;
    	$smallcate->nameSmallCate=$req->txt_SmallCateName;
    	$smallcate->descriptions=$req->txt_SmallCateDecription;
    	$smallcate->id_category=$req->cmb_Small;
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
        $parent=categories::select('id','name')->get()->toArray();
        $persons=DB::table('categories')->join('smallcategories','categories.id','=','smallcategories.id_category')->Where('categories.id','=',$data->id_category)->first();
       // dd($persons);
    	return view('admin.pageAdmin.editSmallCategory',compact('data','parent','persons'));
    }

    public function postEditSmallCategory(Request $req,$id){
    	$smallcate=smallcategories::find($id);
    	$smallcate->nameSmallCate=$req->txt_SmallCateName;
    	$smallcate->descriptions=$req->txt_SmallCateDecription;
    	$smallcate->id_category=$req->cmb_Small;
    	$smallcate->save();
    	return redirect()->route('smallCategory')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update Small category']);

    }
}
