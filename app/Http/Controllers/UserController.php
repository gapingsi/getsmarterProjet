<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function showlogin()
    {
        return view("user.login");
    }

    public function showregister()
    {
        return view("user.register");
    }
    public function alluser()
    {
        $users = user::all();
        return view('user.all', compact("users"));
    }

    public function register(Request $request)
    {
        // dd($request);

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|unique:users|max:45',
            'last_name' => 'required',
            'email' => 'required|max:255',
            'password' => 'required|min:4|max:45'
        ]);


        if ($validator->fails()) {
            Toastr::error('The insertion failed!', 'Error message', ["positionClass" => "toast-top-right"]);
            return redirect('showregister')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->roles = "user";
            $user->password = bcrypt($request->password);
            $user->save();
            Toastr::success('Successfully !!!', 'Registration', ["positionClass" => "toast-top-right"]);
           
            return view('user.login');
        } catch (Exception $e) {
            Toastr::info('something wrond !', 'Attention', ["positionClass" => "toast-top-right"]);
            return redirect('showregister');
            dd('show');
        }
    }

    public function edit($id)
    {

        $user = user::find($id);

        // dd($user);

        if ($user != null) {
            return view("user.register", compact("user"));
        }
        return back();
    }

    public function update(Request $request)
    {
        $user = user::find($request->id);

        if ($user == null) {
            return back();
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route("showregister");
        // ("/admin");
    }

    public function delete($id)
    {

        user::find($id)->delete();
        return redirect()->route("all");
    }



    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::check()) {
                $request->session()->regenerate();
                Toastr::success('connection !!!', 'Successful', ["positionClass" => "toast-top-right"]);
                return redirect('dashboard');
            }
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }


    public function logout()
    {
        Auth::guard()->logout();
        session()->invalidate();
        return view('user.login');
    }
}
