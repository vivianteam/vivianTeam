<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('page.index',['slides'=>$slide,'categories'=>$category,'products'=>$new_product]);
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

    public function posts()
    {
        $posts = person_post_new::get();
        return view('page.blog2', compact('posts'));
    }

    // comment
    //

    public function getComment(Request $request){
         // $sanpham=products::where('id',$req->id)->first();
         //  $image_products=images::where('id_product',$sanpham->id)->get();
        //$same=products::where('id_small_categories',$sanpham->id_small_categories)->get();
            //if ($request->ajax()){
                $preson_posts= person_post_new::where('id',$request->id)->first();
                $comments= comments::where('id_person',$preson_posts->id)->get();

                return view('page.comment2', compact('comments','preson_posts'));
            //}
        }

        public function postComment(Request $request){
           // if ($request->ajax()){
                $user = Auth::user();
                $comment = new comments();
                $comment->id_user = $user->id;
                $comment->id_person = $request->id;
                $comment->content = $request->txt_comment;
              //  dd($comment->id_user,$comment->id_person,$comment->content);
                $comment->save();
                return redirect()->route('getComment');
                //dd($comment);
                //return response()->json(['success'=>'Got Simple Ajax Request.']);
            //}
        }
    // end comment

    public function ajaxRequest(Request $request){


        $post = person_post_new::find($request->id);
        $response = auth()->user()->toggleLike($post);


        return response()->json(['success'=>$response]);
    }

    public function getBlog(Request $req){
        $persons= person_post_new::all();
        //$post=person_post_new::where('id','=',$req->id)->get();
       // $post=person_post_new::select('id')->get();
        // $likePost=person_post_new::find($req->id);
        // $likes=Likes::where('id_person',$likePost->id)->count();
        // $same=person_post_new::where('id',$req->id)->first();
        // $parent=users::where('id_user',$same->id_user)->get();
         //if ($request->ajax()){
                //$preson_posts= person_post_new::where('id',$request->id)->first();
                $testcmt= person_post_new::all();
               // return view('page.commentlist', ['person_post_new'=>$testcmt]);
          //  }
          //  
       // $getPosT=person_post_new::where('id',$req->id)->get();
        $tam=$req->testCountLike;
        dd($tam);
       // nhập số 3 test bình thường thì
        $post = person_post_new::find(5);
// ---dd($tam);
        $commentsCount = likes::where('id_person',$post->id)->count();

        return view('page.blog',compact('persons','testcmt','commentsCount'));
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
        $total=$cart->totalPrice;
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
        $person=new person_post_new;
        $file_image=$req->file('img')->getClientOriginalName();
        $person->created_at=date("Y-m-d H:i:s");
        $person->image=$file_image;
        $person->description=$req->txt_Decription;
        $person->id_user=1;
        $req->file('img')->move('image/bogs/',$file_image);
        $person->save();
        return redirect()->route('getBlog');
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
       // dd($req->txt_fullName,$req->txt_Password,$req->txt_phone);
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

}
