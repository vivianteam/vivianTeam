<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\categories;
use App\smallCategories;
use App\Http\Requests\CateRequest;
class ControllerCategories extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getCategories(){
        $categories = categories::all();
      return view('admin.pageAdmin.categories',['categories' => $categories]);
    }
    public function getAddCategories(){
        return view('admin.pageAdmin.addCategories');
    } 
    public function postAddCategories(CateRequest $req){
        $file_image=$req->file('cateImage')->getClientOriginalName();
        $cate=new categories;
        $cate->name=$req->txt_CateNameTest;
        $cate->image=$file_image;
        $cate->descriptions=$req->txt_CateDecription;
        $req->file('cateImage')->move('image/Categories/',$file_image);
        $cate->save();
        return redirect()->route('categories')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add category']);
    }
    public function getDeleteCategory($id){
        $parent=smallCategories::where('id_category',$id)->count();
        if($parent==0){
            $cate=categories::find($id);
            $cate->delete($id);
            return redirect()->route('categories')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete category']);
        }
        else{
            echo"<script type='text/javascript'>
                alert('Sorry ! You can Not Delete This Category');
                window.location='";
                echo route('categories');
            echo"'</script>";
        }
    }
    public function getEditCategory($id){
        $data=categories::find($id);
        $parent=categories::select('id','name','image','descriptions')->get()->toArray();
        return view('admin.pageAdmin.editCategory',compact('data','parent','id'));
    }
    
    public function postEditCategory(CateRequest $req,$id){
        $cate=categories::find($id);
        $file_image=$req->file('cateImage')->getClientOriginalName();
        $cate->name=$req->txt_thienTest;
        $cate->image=$file_image;
        $cate->descriptions=$req->txt_CateDecription;
        $req->file('cateImage')->move('image/Categories/',$file_image);
        $cate->save();
        return redirect()->route('categories')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update category']);
    }
    public function getdemo(){
        $categories = categories::all();
      return view('admin.pageAdmin.demo',['categories' => $categories]);
    }
}