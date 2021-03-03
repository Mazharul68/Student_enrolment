<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    //  */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

     //admin logout
   public function logout(){
    Auth::logout();
    return redirect()->route('login.admin');
    }
    //My Profile
    public function myProfile(){
        $profile = Admin::latest()->first();
        return view('admin.profile.my_profile',compact('profile'));
    }
    //Edit Profile
    public function editProfile(){

        $profile = Admin::latest()->first();
        return view('admin.profile.edit_profile',compact('profile'));
    }
    public function updateProfile(Request $request){

        $img = $request->old_img;
        if($request->file('image')){
        unlink($img);
        $img =$request->file('image');
        $name_gen=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->resize(166,110)->save('public/admin/images/user/'.$name_gen);
        $save_url='public/admin/images/user/'.$name_gen;

        Admin::findOrFail(Auth::user()->id)->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'image' =>$save_url,
        ]);
        $notification=array(
            'message'=>'Profile Update Successfully',
            'alert-type'=>'success'
             );
        return redirect()->back()->with($notification);
    }else{
        Admin::findOrFail(Auth::user()->id)->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
        ]);
        $notification=array(
            'message'=>'Profile Update Successfully',
            'alert-type'=>'success'
             );
        return redirect()->back()->with($notification);
    }
    }
    //Change Password
    public function changePossowrd(){

        return view('admin.profile.change_password');
    }
    // Update PassWord
    public function updatePassword(Request $request){

        $db_pass = Auth::user()->password;
        $current_password = $request->old_password;
        $new_pass = $request->new_password;
        $confirm_pass = $request->confirmation_password;

        if (Hash::check($current_password,$db_pass)) {

         if ($new_pass=== $confirm_pass) {

             Admin::findOrFail(Auth::id())->update([
             'password' => Hash::make($new_pass)
             ]);
             Auth::logout();

             $notification=array(
        'message'=>'New Password Change Success and now login with new password',
        'alert-type'=>'success'
         );
        return Redirect()->route('login.admin')->with($notification);

         }else{
             $notification=array(
        'message'=>'New Password and confirm password not match',
        'alert-type'=>'error'
         );
        return Redirect()->back()->with($notification);
         }

        }else{
            $notification=array(
        'message'=>'Password Dose Not Match',
        'alert-type'=>'error'
         );
        return Redirect()->back()->with($notification);
        }
    }
}
