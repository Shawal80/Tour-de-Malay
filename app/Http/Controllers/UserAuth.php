<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Redirect;
class UserAuth extends Controller
{
    public function userLogin(Request $request){

        // dd($request->input());
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

         $auth = User::where('email', $request->email)->where('password', $request->password)->first();
        //  dd($auth);
        if(isset($auth) && !empty($auth)){

            $request->session()->put('user',$auth);

            return redirect('admin-dashboard');

            // echo session('user');
        }
        else
        {
            return redirect()->back()->with(['message' => 'invalid email or password']);
        }

    }
    public function userLogout(Request $request){

        $request->session('user')->flush();

        return redirect('login')->with('message','logout out successfull');
    }
}
