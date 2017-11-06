<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function postLogin(Request $request){
        $messages = [
            'username.required' => 'Tài khoản không được để trống.',
            'password.required' => 'Mật khẩu không được để trống.',
        ];
        $rule = [
            'username' => 'required',
            'password' => 'required'
        ];
        $this->validate($request,$rule,$messages);

        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            // 2. auto create session with Auth::user()
            return redirect(route('dashboard'));
        }else{
            return redirect(route('login'))->with('msg', 'Tài khoản hoặc mật khẩu sai!!');
        }
    }

}
