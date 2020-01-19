<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admins')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin.login');
    }
    protected function guard()
    {
        return Auth::guard('admins');
    }


    //  /**
    //  * Get the post register / login redirect path.
    //  *
    //  * @return string
    //  */
    // public function redirectPath()
    // {

    //     return  redirect()->route('admin.home');
    // }

     /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $messages = [
            'email.exists' => 'The email does not match our records.',
            'password.*' => 'The password does not exist.'
        ];
        $request->validate([
            $this->username() => 'required|string|exists:admins',
            'password' => 'required|string',
        ],$messages);
    }
}
