<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Events\Auth\UserActivationEmail;

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
    protected $redirectTo = '/home';
    protected $username = 'username';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('guest');
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
            'name' => 'required|string|max:25|min:3|alpha',
            'lastname' => 'required|string|max:25|min:3|alpha',
            'username' => 'required|max:25|min:3|unique:users|alpha_dash',
            'email' => 'required|string|email|max:55|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'captcha' => 'required|captcha',
            
           
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $pic_path = 'profil.png';
       $user = User::create([
           
            'name' => $data['name'],
            'pic' => $pic_path,
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'slug' => str_slug($data['name'],'-'),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
           'active' => false,
           'activation_token' => str_random(190)
        ]);

        Profile::create(['user_id' => $user->id]);
        return $user;
    }

  

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @param mixed $user
     * @return mixed
     */
    
     protected function registered(Request $request, $user)
{
    //Sending email
    event(new UserActivationEmail($user));
    $this->guard()->logout();
    return redirect()->route('login')->withSuccess('Εγγραφήκατε επιτυχώς. Παρακαλούμε να ελέγξετε το email σας για να ενεργοποιήσετε το λογαριασμό σας.');
}


}
