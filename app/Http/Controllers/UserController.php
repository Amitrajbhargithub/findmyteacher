<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentDetail;
use DB;
use session;
class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function getdata(Request $request)
    {
        
            $user =  DB::table('student_details')->where('email',$request->email)->first();
           if(!$user || !Hash::check($request->password,$user->password))
           {
               return "username or password not matched";
           } 
           else
           {
               $request->session()->put('user',$user);
               return redirect('product');
           }
    }

    public function registration(Request $request)
    {
        $user = new StudentDetail;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->save();
        
        return redirect('register');
    }
}
