<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\products;
use App\smallCategories;
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

   	public function postAddProduct(ProductRequest $req){
   		$file_image=$req->file('proImg')->getClientOriginalName();
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
        $req->file('proImg')->move('image/products/',$file_image);
        $pro->save();
        return redirect()->route('products')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add products']);
   	}

   	public function getEditProduct($id){
   		$data=products::find($id);
        $parent=smallCategories::select('id','nameSmallCate')->get()->toArray();
        return view('admin.pageAdmin.editProducts',compact('data','parent'));
   	}

   	public function postEditProduct(ProductRequest $req,$id){
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

    public function getDeleteProducts($id){
        $pro=products::find($id);
        $pro->delete($id);
        return redirect()->route('products')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete product']);
    }

}
