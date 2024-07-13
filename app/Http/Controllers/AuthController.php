<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
        return view('admin.pages.register');
    }
    public function storeUser(Request $request){
        $validate = $request ->validate([
            'name'=> 'required',
            'type' => 'required|in:admin,editor',
            'email'=> 'required|email',
            'password' => 'required'
        ]);
        $obj = new User();
        $obj->name = $request->name;
        $obj->role = $request->type;
        $obj->email = $request->email;
        $obj->password = $request->password;
        $obj-> save();
        return redirect('/login');
    }
    public function login(){
        return view('admin.pages.login');
    }
    public function loginStore(Request $request){
        $validate = $request ->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)
        ->where('password', $request->password)->first();
        if(!$user){
            return redirect()->back()->with('err_msg','Invalid email and password');
        }
        else{
            $request->session()->put('username', $user->name);
            $request->session()->put('useremail', $user->email);
            $request->session()->put('userrole', $user->role);
            $request->session()->put('userid', $user->id);

            return redirect()->to('dashboard');
        }
    }

    // public function dashboard(){
    //     return view('dashboard');
    // }
    // public function teacher(){
    //     return view('teacher');
    // }
    // public function student(){
    //     return view('student');
    // }
    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect('/login');
    }

    //get all user
    public function getAllUsers(){
        $data = User::all();
        return view('admin.pages.user.allUser', compact('data'));
    }
    public function delete($id){
        User::find($id)->delete();
        return redirect()->back()->with('msg', 'User deleted successfully');
    }
}