<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\products;
use App\smallCategories;
use App\images;
use App\Http\Requests\ProductRequest; 

class ControllerProduct extends Controller
{
    public function getProduct(){
    	$products= products::all();
   		return view('admin.pageAdmin.products',['products'=>$products]);
   	}

   	public function getAddProduct(){
   		$parent=smallCategories::select('id','nameSmallCate')->get()->toArray();
   		return view('admin.pageAdmin.addProduct',compact('parent'));
   	}

   	public function postAddProduct(Request $req){
   		  $file_image=$req->file('cateImage')->getClientOriginalName();
        $pro= new products; 
        $pro->name=$req->txt_name;
        $pro->descriptions_sort=$req->txt_dsort;
        $pro->descriptions_long=$req->txt_dlong;
        $pro->image=$file_image;
        $pro->color=$req->txt_Color;
        $pro->size=$req->txt_Size;
        $pro->price_in=$req->txt_PriceIn;
        $pro->price_out=$req->txt_PriceOut;
        $pro->price_sale=$req->txt_PriceSale;
        $pro->status=$req->cmb_Satus;
        $pro->new=$req->cmb_New;
        $pro->id_small_categories=$req->cmb_Small;
        $req->file('cateImage')->move('image/products/',$file_image);
        $pro->save();
        return redirect()->route('products')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add products']);
   	}

   	public function getEditProduct($id){
   		$data=products::find($id);
        $parent=smallCategories::select('id','nameSmallCate')->get()->toArray();
       // dd($data);
        return view('admin.pageAdmin.editProducts',compact('data','parent'));
   	}

   	public function postEditProduct(Request $req,$id){
      if($req->txt_name == null && $req->txt_dsort == null && $req->txt_dlong == null && $req->txt_Color == null && $req->txt_Size == null && $req->txt_PriceIn == null && $req->txt_PriceOut == null && $req->txt_PriceSale == null && $req->cmb_Satus == null && $req->cmb_New == null ){
        echo"<script type='text/javascript'>
                alert('Sorry ! You need change information or click button Cancel');
                window.location='";
                echo route('getEditProduct',['id' => $id]);
            echo"'</script>";
      }

      else
      {
      	$file_image=$req->file('proImg')->getClientOriginalName();
       	$pro=products::find($id);
        $pro->name=$req->txt_name;
        $pro->descriptions_sort=$req->txt_dsort;
        $pro->descriptions_long=$req->txt_dlong;
        $pro->image=$file_image;
        $pro->color=$req->txt_Color;
        $pro->size=$req->txt_Size;
        $pro->price_in=$req->txt_PriceIn;
        $pro->price_out=$req->txt_PriceOut;
        $pro->price_sale=$req->txt_PriceSale;
        $pro->status=$req->cmb_Satus;
        $pro->new=$req->cmb_New;
        $pro->id_small_categories=$req->cmb_Small;
        $req->file('proImg')->move('image/products/',$file_image);
        $pro->save();
        return redirect()->route('products')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update products']);
      }
    }

    public function getDeleteProducts($id){
        $parent=images::where('id_product',$id)->count();
        if($parent==0){
            $cate=products::find($id);
            $cate->delete($id);
            return redirect()->route('products')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete product']);
        }
        else{
            echo"<script type='text/javascript'>
                alert('Sorry ! You can Not Delete This product');
                window.location='";
                echo route('products');
            echo"'</script>";
        }
    }

      public function getAddProduct2(){
      $parent=smallCategories::select('id','nameSmallCate')->get()->toArray();
      return view('admin.pageAdmin.addPro',compact('parent'));
    }

    public function postAddProduct2(Request $req){
      if($req->txt_in>$req->txt_out || $req->txt_sale<$req->txt_in || $req->txt_sale>$req->txt_out){
        echo"<script type='text/javascript'>
                alert('Sorry ! Price in, price out, price out invalid' );
                window.location='";
                echo route('products');
            echo"'</script>";
      }
      else{

      
        $file_image=$req->file('cateImage')->getClientOriginalName();
        $pro= new products; 
        $pro->name=$req->txt_name;
        $pro->descriptions_sort=$req->txt_sort;
        $pro->descriptions_long=$req->txt_long;
        $pro->image=$file_image;
        $pro->color=$req->txt_color;
        $pro->size=$req->txt_size;
        $pro->price_in=$req->txt_in;
        $pro->price_out=$req->txt_out;
        $pro->price_sale=$req->txt_sale;
        $pro->status=$req->txt_Status;
        $pro->new=$req->txt_New;
        $pro->id_small_categories=$req->cmb_Small;
        $req->file('cateImage')->move('image/products/',$file_image);
        $pro->save();
        return redirect()->route('products')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add products']);
      }
    }

}
