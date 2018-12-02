<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    protected $guard = 'admin';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        if (\Auth::guard($this->guard)->check()) {
            return redirect($this->redirectTo);
        }
        return view('admin.auth.login');
    }


    public function login(Request $request)
    {
        $this->validateLogin($request);

        $admin = $request->only('email', 'password');

        if (\Auth::guard($this->guard)->attempt($admin)) {

            return redirect($this->redirectTo);

        }

        return back()->withInput($admin)->withErrors('账号密码错误');
    }

    public function logout()
    {
        \Auth::guard($this->guard)->logout();

        return redirect()->route('admin.login');
    }


}
