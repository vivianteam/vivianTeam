<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageAdminController extends Controller
{
     public function getIndexAdmin(){
    	return view('admin.pageAdmin.indexAdmin');
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
