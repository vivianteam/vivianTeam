<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use App\users;
use App\Http\Requests\CateRequest;
use Session;
use Hash;
use Auth;
use Illuminate\Http\Request;
use App\orders;
use App\admin;

class controllerAccount extends Controller
{
    public function getCustomer(){
    	$customers = users::where('id_type',1)->get();
    	return view('admin.pageAdmin.users.manaCustomer',compact('customers'));
    }

    public function getLoginAdmin(){
        return view('admin.pageAdmin.Login.login');
    }

    public function postLoginAdmin(Request $req){
        $credentials = array('email'=>$req->txt_Email,'password'=>$req->txt_Password);
        $user = admin::where([
                ['email','=',$req->txt_Email]
            ])->first();
        if($user){
            if(Auth::attempt($credentials)){
                if($user['type']==2)
                    return redirect()->route('indexAdmin');
                else
                    if($user['type']==3)
                        return redirect()->route('getContact');
                    else
                        return redirect()->back()->with(['flag'=>'dange0.
                            r','message'=>'Bạn không đủ quyền vào trang này']);
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
           return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
        }
    }

    public function postLogoutAdmin(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function getAddCustomer(){
    	return view('admin.pageAdmin.users.addCustomer');
    }

    public function postAddCustomer(Request $req){
    	$customer=new users;
    	$customer->username=$req->txt_name;
    	$customer->password=$req->txt_password;
    	$customer->phone=$req->txt_phone;
    	$customer->email=$req->txt_email;
    	$customer->address=$req->txt_address;
    	$customer->gender=$req->txt_gender;
    	$customer->id_type=1;
    	$customer->save();
    	return redirect()->route('getCustomer')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add customer']);

    }
    public function geteditCustomer($id){
    	$data=users::find($id);
        //$parent=categories::select('id','name','image','descriptions')->get()->toArray();
        return view('admin.pageAdmin.users.editCustomer',compact('data'));
    }


    public function posteditCustomer(Request $req,$id){
    	$customer=users::find($id);
    	$customer->username=$req->txt_name;
    	$customer->password=$req->txt_password;
    	$customer->phone=$req->txt_phone;
    	$customer->email=$req->txt_email;
    	$customer->address=$req->txt_address;
    	$customer->gender=$req->txt_gender;
    	$customer->id_type=1;
    	$customer->save();
    	return redirect()->route('getCustomer')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update customer']);

    }
    public function getdeleteCustomer($id){
        $parent=orders::where('id_user',$id)->count();
        if($parent==0){
            $cate=users::find($id);
            $cate->delete($id);
            return redirect()->route('getCustomer')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete Customer']);
        }
        else{
            echo"<script type='text/javascript'>
                alert('Sorry ! You can Not Delete This Customer');
                window.location='";
                echo route('getCustomer');
            echo"'</script>";
        }
    }

    /////////////////////////////////////////////

    public function getEmployess(){
        $customers = admin::all();
        return view('admin.pageAdmin.users.manaEmployee',compact('customers'));
    }

    public function getAddEmployess(){
        return view('admin.pageAdmin.users.addEmployee');
    }

    public function postAddEmployess(Request $req){
        $customer=new admin;
        $customer->username=$req->txt_name;
        $customer->password=$req->txt_password;
        $customer->phone=$req->txt_phone;
        $customer->email=$req->txt_email;
        $customer->address=$req->txt_address;
        $customer->gender=$req->txt_gender;
        $customer->type=1;
        $customer->save();
        return redirect()->route('getCustomer')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add employess']);

    }
    public function getEditEmployess($id){
        $data=admin::find($id);
        //$parent=categories::select('id','name','image','descriptions')->get()->toArray();
        return view('admin.pageAdmin.users.editEmployee',compact('data'));
    }
    public function postEditEmployess(Request $req,$id){
        $customer=admin::find($id);
        $customer->username=$req->txt_name;
        $customer->password=$req->txt_password;
        $customer->phone=$req->txt_phone;
        $customer->email=$req->txt_email;
        $customer->address=$req->txt_address;
        $customer->gender=$req->txt_gender;
        $customer->id_type=1;
        $customer->save();
        return redirect()->route('getemployess')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update employess']);

    }
    public function getDeleteEmployess($id){
        $parent=admin::where('id_user',$id)->count();
        if($parent==0){
            $cate=admin::find($id);
            $cate->delete($id);
            return redirect()->route('getemployess')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete delete employess']);
        }
        else{
            echo"<script type='text/javascript'>
                alert('Sorry ! You can Not Delete This employess');
                window.location='";
                echo route('getemployess');
            echo"'</script>";
        }
    }

}
