<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Nguoiquanly;
use Auth;
use Validator;



class LoginController extends Controller
{
// trang chu
public function getIndex(){
return view('Admin.welcome');
}

// get trang đăng nhập
    public function getAdminLogin(){
    return view ('Admin.AdminLogin');
    }
    // post trang đăng nhập
    public function postAdminLogin(Request $request){
    $rules = [
    'email'=>'required|email',
    'password'=>'required|min:4',
    // email, password: là tên name trong form
    ];

    $messages= [
    'email.required' => 'Email la truong bat buoc',
    'email.email' => 'Email khong dung dinh dang',
    'password.required' => 'Mat khau la truong bat buoc',
    'password.min' => 'Mat khau phai it nhat 4 ky tu',
    // email, password: là tên name trong form
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if($validator->fails()){
    return redirect()->back()->withErrors($validator)->withInput();
    }else{
    $email = $request->input('email');
    $password = $request->input('password');

    // Email, Password : tên cột trong bảng Admin
    // Thằng Auth sẽ đang dùng cho bảng users. Mà bảng users trong database không có trường email.
    // Hoặc là dùng chung 1 bảng users và thêm trường user_role cho hắn là admin.
    // Cái thằng dùng Auth ni t chưa rõ lắm nơi.
    
    $nguoiQuanLy = Nguoiquanly::where('email', $email)->first();
    if($nguoiQuanLy != null){
    if(Hash::check($password, $nguoiQuanLy->password)) {
    // Gắn vào session nếu đăng nhập thành công
    Session::put('user', $nguoiQuanLy);
    // return "Đăng nhập thành công";
    return view('Admin.welcome')->with(['nguoiQuanLy'=>$nguoiQuanLy]);
    } else {
         return view("Admin.AdminLogin")->with('Mật khẩu không đúng');
    }
    }else{
                return view("Admin.AdminLogin");
    // return "Tài khoản chưa tồn tại trong hệ thống";
    }
    }
    }


    public function logout(){
    Auth::logout();
    return redirect('admindangnhap');
    }
    // dang xuat
   //  public function postLogout(){
 //   Auth::logout();
 //   return redirect()->route('index');
  // }

    // Session::forget('Sesstion_name');
    // public function logout()
    // {
    // if (Session::has('user')) {
    // Session::forget('user');
    // Session::save();
    // if (!Session::has('user')) {
    // return redirect()->route('index');
    // }
    // }
    // }


   //  protected function registered(Request $request, $user)
   // {
   //     $this->guard()->logout();
   //     return redirect('/login')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');
   // }


 //    public function getLogout() {
//    Auth::logout();
//    return redirect(\URL::previous());
// }
}