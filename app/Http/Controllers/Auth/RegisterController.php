<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'first_name'     => ['required', 'string', 'max:255'],
            'last_name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'first_name'  => $data['first_name'],
    //         'last_name'   => $data['last_name'],
    //         'mobile'      => $data['mobile'],
    //         'company'     => $data['company'],
    //         'country'     => $data['country'],
    //         'email'       => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    protected function register(Request $request) {
        $user               = new User();
        $user->first_name   = $request->first_name;
        $user->last_name    = $request->last_name;
        $user->mobile       = $request->mobile;
        $user->company      = $request->company;
        $user->country      = $request->country;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
        $token              = Str::random(64);
        $user->verification_token = $token;

        $user->save();

        if($user != null) {

            // Send verification code
                MailController::sendSignupEmail($user->first_name,$user->email,$user->verification_token);
                return redirect()->route('login')->with(session()->flash('message','Your account has been created. Please verify to be able to login'));
            //Echo the message of sent email
        }
        return redirect()->back()->with(session()->flash('alert-danger','Error sending email'));
//        return redirect()->route('login');
    }
}
