<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            "fullname" => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "phone" => ['required'],
            "dob" => ['required', 'date'],
            "emergency_contact" => ['required'],
            "gender" => ['required', 'string', 'max:10'],
            "subgroup" => ['required'],
            "hostel" => ['required'],
            "room_number" => ['required'],
            "program" => ['required'],
            "year" => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            "avatar" => ['required', 'image','mimes:jpeg,png', 'max:2048'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {//dd($data['avatar']);
        return User::create([
            "fullname" => $data['fullname'],
            "email" => $data['email'],
            "phone" => $data['phone'],
            "dob" => new \DateTime($data['dob']),
            "emergency_contact" => $data['emergency_contact'],
            "gender" => $data['gender'],
            "subgroup" => $data['subgroup'],
            "hostel" => $data['hostel'],
            "room_number" => $data['room_number'],
            "program" => $data['program'],
            "year" => $data['year'],
            "password" => Hash::make($data['password']),
            "avatar" => $data['avatar'],
        ]);
    }

     /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {   $val =[];
        $this->validator($request->all())->validate();

        if( $request->hasFile('avatar')){
            $imageName = $request->email.time().'.'.$request->file('avatar')->getClientOriginalExtension();;
            $file_path = "/images/uploads/users/$imageName";
            $request->avatar->move(public_path('/images/uploads/users'), $imageName);
            $val =$request->all();
            $val['avatar'] = $file_path;
        }
        //dd($val);
        event(new Registered($user = $this->create($val)));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

}
