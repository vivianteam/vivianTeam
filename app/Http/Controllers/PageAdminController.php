<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\users;
use App\products;
use App\orders;
use App\order_details;
use App\person_post_new;
use App\smallCategories;


class PageAdminController extends Controller
{
     public function getIndexAdmin(Request $req){
      $totalCustomer = users::where('id_type',1)->count();
      $totalOrder=orders::where('paid',0)->count();
      $totalrequest=person_post_new::all()->count();
      $showNewOrders=orders::where('paid',0)->paginate(5);
      $reportDays = DB::table('orders')->join('order_details','orders.id','=','order_details.id_order')
                   ->select('date_order', DB::raw('SUM(totalPrice) as total'), DB::raw('SUM(quanitily) as totalQty'))
                   ->groupBy('date_order')
                   ->get();
      $reportMonths = DB::table('orders')->join('order_details','orders.id','=','order_details.id_order')
                   ->select('date_order', DB::raw('SUM(totalPrice) as total'), DB::raw('SUM(quanitily) as totalQty'))
                   ->whereMonth('date_order',$req->cmb_Small)
                   ->groupBy('date_order')
                   ->paginate(5);
      $reportProducts=DB::table('smallCategories')->join('products','smallCategories.id','=','products.id_small_categories')->where('amount','<','50')->paginate(5);
     // dd($reportProducts);
    //  dd($reports);


    	return view('admin.pageAdmin.indexAdmin', compact('totalCustomer','totalOrder','totalrequest','showNewOrders','reportDays','reportMonths','reportProducts'));
    }
    public function getDashboard(){
      return view('viewAdmin.dashboard');
    }

    public function getBanner(){
      return view('viewAdmin.banner');
    }

    public function getLanguager(){
      return view('viewAdmin.language');
    }

    public function getShop_brand(){
      return view('viewAdmin.shop_brand');
    }

    public function getShop_category(){
      return view('viewAdmin.shop_category');
    }

    public function getShop_customery(){
      return view('viewAdmin.shop_customer');
    }

    public function getShop_order(){
      return view('viewAdmin.shop_order');
    }

    public function getShop_productr(){
      return view('viewAdmin.shop_product');
    }

    public function getShop_shipping(){
      return view('viewAdmin.shop_shipping');
    }

    public function getShop_shipping_status(){
      return view('viewAdmin.shop_shipping_status');
    }

    public function getShop_special_price(){
      return view('viewAdmin.shop_special_price');
    }

    public function getLogin(){
      return view('viewAdmin.login');
    }

    public function getSetting(){
      return view('viewAdmin.setting');
    }

    

}
