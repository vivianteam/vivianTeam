<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\products;
use App\orders;
use App\order_details;
use App\users;
use Illuminate\Http\Request; 

class controllerOrder extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getManagementOrder(){
    	$orders=orders::all();
    	return view('admin.pageAdmin.manageOrder',compact('orders'));
    }

    public function getOrderStatus(){
        $orders=orders::all();
        return view('admin.pageAdmin.orderStatus',compact('orders'));
    }

    public function getEditManagementOrder2(Request $req){
    	$orders=orders::find($req->id);
    	$parent=products::select('id','name')->get()->toArray();
    	$users=users::where('id',$req->id)->first();
    	$details=order_details::where('id_order',$req->id)->get()->toArray();
    	//dd($details);
    	// $products=products::where('id',$details->id_product)->get()->toArray();
    	// dd($products);
    	return view('admin.pageAdmin.editOrder2',compact('parent','users','details','orders'));
    }

    public function postCheckOrder(Request $req){
        $checkOrder=orders::find($req->id);
        $status = $req->status;
        $order_id=$req->id;
        //dd($status);
        if($checkOrder->status==0)
        {
            $checkOrder->status =1;
            $checkOrder->paid=1;
        }
        else
        {
            $checkOrder->status =0;
            $checkOrder->paid=0;
        }
        $reuslt = $checkOrder->save();
       // dd($reuslt);
        return view('admin.pageAdmin.ajaxToggoActiveStatus',compact('status','order_id'));
    }
}
