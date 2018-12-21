<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\slides;
use App\categories;
use App\products;
use App\images;
use App\smallCategories;
use App\Cart_Old;
use App\users;
use App\orders;
use App\order_details;
use App\person_post_new;
use App\likes;
use App\comments;
use App\contacts;
use Session;
use Mail;
use Hash;
use Auth;
 
class controllerPage extends Controller
{
    public function getIndex(){
        $slide=slides::all();
        $category = categories::all();
        $new_product= products::where('new',1)->get();
        $persons=DB::table('users')->join('person_post_new','users.id','=','person_post_new.id_user')->get();
        return view('page.index',compact('persons'),['slides'=>$slide,'categories'=>$category,'products'=>$new_product]);
    }

    public function getCollectionWomen($type){
    	$sp_cate = products::where('id_small_categories',$type)->get();
        $sp_small =smallCategories::all();
        $sp_smallName =smallCategories::where('id',$type)->first();
        return view('page.collection_women',compact('sp_cate','sp_small','sp_smallName'));
    }

    public function getListingMenu(){
        $category = categories::all();
        return view('page.listingMenu',['categories'=>$category]);
    }

    public function getProductTitle(Request $req){
        $sanpham=products::where('id',$req->id)->first();
        $same=products::where('id_small_categories',$sanpham->id_small_categories)->get();
        $image_products=images::where('id_product',$sanpham->id)->get();
        //$image_product=products::where('id',images::where('id_product'))->get();
    	return view('page.productTitle',compact('sanpham','image_products'),['products'=>$same]);
    }
/*
    public function getListing(){
        $category = categories::all();
        return view('page.listing',['categories'=>$category]);
    }
    */
   public function getCart(){
        return view('page.cart');
   }

   public function getAddCart(Request $req,$id){
        $product = products::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart_Old($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
   }

    public function getAddCartTitle(Request $req,$id){
            $product = products::find($id);
            $oldCart = Session('cart')?Session::get('cart'):null;
            $cart = new Cart_Old($oldCart);
            $cart->add($product, $id,$req->qty);
            $req->session()->put('cart',$cart);
            return redirect()->back();
    }

   public function getDeleteCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart_Old($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getUpdateCart($id, $qty){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart_Old($oldCart);
        $cart->update_new($id,$qty);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCustomerInformation()
    {
        return view('page.customerInformation');
    }

    public function getShippingMethod()
    {
        return view('page.shippingMethod');
    }
    public function getPaymentMethod()
    {
        return view('page.paymentMethod');
    }

    public function getOrder(){
        return view('page.customerInformation');
    }
    // comment
    public function getComment($id){
        $preson_posts=DB::table('users')->join('person_post_new','users.id','=','person_post_new.id_user')->where('person_post_new.id',$id)->first();
        $countComment=comments::where('id_person',$id)->count();
        $getPerson=likes::where('id_person',$id)->get();
        // dd($getPerson->id_user);
        //dd($countLike);
        // dd($idPer);
        //$id_post=$idPer;
        $persons=DB::table('users')->join('person_post_new','users.id','=','person_post_new.id_user')->get();
        $comments= DB::table('comments')->join('users','comments.id_user','=','users.id')->where('id_person',$id)->paginate(8);
        $sp_small =smallCategories::all();
        return view('page.comment2', compact('comments','preson_posts','countComment','getPerson','persons','sp_small'));
    }

    public function postComment(Request $request){
        if(Auth::check())
        {
            $user = Auth::user();
            $comment = new comments();
            $comment->id_user = $user->id;
            $comment->id_person = $request->id;
            $comment->content = $request->txt_comment;
            $comment->date = date("Y-m-d H:i:s");
            $comment->save();
            return redirect()->route('getcomment', ['id' => $request->id]);
        }
        else{
            echo"<script type='text/javascript'>
                alert('Sorry ! You need login or register!!!');
                window.location='";
                echo route('getcomment', ['id' => $request->id]);
            echo"'</script>";

        }
    }
    // end comment

    public function getBlog(Request $req){
        $persons=DB::table('users')->join('person_post_new','users.id','=','person_post_new.id_user')->get();
        $likePosts=DB::table('person_post_new')
                    ->join('likes','person_post_new.id','=','likes.id_person')->get();

        $getPerson=likes::where('id_person',$req->id)->get();
        return view('page.blog',compact('persons','likePosts','getPerson'));
    }

    // check like
    public function postCheckLike(Request $req){
        $checkOrder=likes::find($req->id);
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
 
    public function postLikeTest02(Request $req){
        $loggedin_user=Auth::user()->id;
        $like_user=likes::where(['id_user'=>$loggedin_user,'id_person'=>$req->ID_product])->first();
        if(empty($like_user->id_user)){
            $id_user=Auth::user()->id;
            $id_person=$req->ID_product;
            $like=new likes();
            $like->id_person=$id_person;
            $like->id_user=$id_user;
            $like->save();
        }
        else
            return redirect()->route('getBlog');
    }

    public function getLikeTest01($id){
        $loggedin_user=Auth::user()->id;
        $like_user=likes::where(['id_user'=>$loggedin_user,'id_person'=>$id])->first();
        if(empty($like_user->id_user)){
            $id_user=Auth::user()->id;
            $id_person=$id;
            $like=new likes();
            $like->id_person=$id_person;
            $like->id_user=$id_user;
            $like->save();
            return redirect()->route('getBlog');
        }
        else
            return redirect()->route('getBlog');
    }

//     public function likeTest($slug)
// {
//     $article = likes::where('slug', $slug)->first();
//     $user = \Auth::user(); //to get authenticated user...
//     $user->toggleFavorite($article); // toggle so if u already like it u remove it from the liked table
//     return response()->json(['like'=>$user ]);
// }

    public function postPayment(Request $req){
        $cart = Session::get('cart');
        $totalTam=$cart->totalPrice+20000;
        $total=$totalTam;
        $quanitily=$cart->totalQty;
        //dd($total,$quanitily);
        $url="https://www.baokim.vn/payment/product/version11?business=tducnguyen1997%40gmail.com&id=&order_description=&product_name=Tổng hóa đơn&product_price=1&product_quantity={$quanitily}&total_amount={$total}&url_cancel=&url_detail=&url_success=http%3A%2F%2Flocalhost%3A8080%2Flaravel%2Fvivianv1.0%2Fvivian%2Fvivian%2Fpublic%2Findex";
        return redirect()->away($url);
    }
 
    public function postLikePost(Request $request)
       {
           $post_id = $request['postId'];
           //$is_like = $request['isLike'] === 'true';
           $post = person_post_new::find($post_id);
           if (!$post) {
               return null;
           }
           $user = Auth::user();

           $like = $user->likes()->where('id_person', $post_id)->first();
           if ($like) {
               $already_like = $like->like;
               $update = true;
               if ($already_like == $is_like) {
                   $like->delete();
                   return null;
               }
           } else {
               $like = new Like();
           }
           //$like->like = $is_like;
           $like->id_user = $user->id;
           $like->id_person = $post->id;
           if ($update) {
               $like->update();
           } else {
               $like->save();
           }
           return null;
       }

    public function getContact(){
        return view('page.contact');
    }

    public function postContact(Request $req){
        $contacts =new contacts;
        $contacts->name=$req->txt_name;
        $contacts->email=$req->txt_email;
        $this->email=$req->txt_email;
        $contacts->phone=$req->txt_phone;
        $contacts->messsage=$req->txt_message;
        $contacts->save();

        $data=['hoten'=>$req->txt_name];
        Mail::send('page.contactMessage',$data,function($msg){
            $msg->from('tducnguyen1997@gmail.com','Đức Thiện');
            $msg->to($this->email)->subject('Xác nhận liên lạc');
        });
        return redirect()->route('index');
    }
    public function postBlog(Request $req){
        if(Auth::check())
        {
            $user = Auth::user();
            $person=new person_post_new;
            $file_image=$req->file('img')->getClientOriginalName();
            $person->created_at=date("Y-m-d H:i:s");
            $person->image=$file_image;
            $person->description=$req->txt_Decription;
            $person->id_user=$user->id;
            $req->file('img')->move('image/bogs/',$file_image);
            $person->save();
            return redirect()->route('getBlog');
        }
        else{
            echo"<script type='text/javascript'>
                alert('Sorry ! You need login or register!!!');
                window.location='";
                echo route('getBlog');
            echo"'</script>";

        }

    }


    public function postOrder(Request $req){
        $cart = Session::get('cart');

        // $user = new users;
        // $user->username=$req->fullName;
        // $user->password='123';
        // $user->email=$req->email;
        // $this->email=$req->email;
        // $user->gender=$req->gender;
        // $user->phone=$req->phone;
        // $user->address=$req->address;
        // $user->id_type=1;
        // $user->save();

        $user = Auth::user();
       // $email=$user->email;
        $user->email=$req->email;
        $this->email=$req->email;
        $order = new orders;
        $order->id_user = $user->id;
        $order->date_order = date("Y-m-d H:i:s");
        $order->totalPrice = $cart->totalPrice;
        $order->payment = $req->payment;
        $order->paid = 0;
        $order->status = 'chua';
        $order->save();

        foreach ($cart->items as $key => $value) {
            $order_detail = new order_details;
            $order_detail->id_order = $order->id;
            $this->id_order=$order->id;
            $order_detail->id_product = $key;
            $this->id_product=$key;
            $order_detail->quanitily = $value['qty'];
            $order_detail->price = ($value['price']/$value['qty']);
            $order_detail->save();
        } 

        $data=['hoten'=>$req->fullName,'idOrder'=>$order->id,'Total'=>$cart->totalPrice];
        Mail::send('page.message',$data,function($msg){
            $msg->from('tducnguyen1997@gmail.com','Đức Thiện');
            $msg->to($this->email)->subject('Xác nhận đặt hàng');
        });

        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');

    }

    public function getSignin(){
        return view('page.register');
    }

    public function postSignin(Request $req){
        $user = new users();
        $user->username = $req->txt_fullName;
        $user->password = Hash::make($req->txt_Password);
        $user->phone = $req->txt_phone;
        $user->email = $req->txt_Email;
        $user->address = $req->txt_Address;
        $user->gender = $req->txt_Gender;
        $user->id_type=1;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function getLoginPage(){
        return view('page.login');
    }

    public function postLoginPage(Request $req){
        $credentials = array('email'=>$req->txt_Email,'password'=>$req->txt_Password);
        $user = users::where([
                ['email','=',$req->txt_Email]
            ])->first();
        if($user){
            if(Auth::attempt($credentials)){

            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
           return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
        }
    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function getUpdateAcc(){
        
        return view('page.updateAccount');
    }

    public function postUpdateAcc(Request $req){
        $user = Auth::user();
        $users = users::find($user->id)->first();
        $users->username = $req->txt_fullName;
        $users->password = Hash::make($req->txt_Password);
        $users->phone = $req->txt_phone;
        $users->email = $req->txt_Email;
        $users->address = $req->txt_Address;
        $users->gender = $req->txt_Gender;
        $users->id_type=1;
        // dd($req->txt_fullName,$req->txt_phone,$req->txt_Email,$req->txt_Address,$req->txt_Gender);
        $users->save();
        return redirect()->route('getUpdateAcc');

    }

    public function getSearch(Request $req){
        $products=products::where('name','like','%'.$req->key.'%')->orWhere('price_out',$req->key)->get();
        $sp_small =smallCategories::all();
        return view('page.search',compact('products','sp_small'));

    }

}
