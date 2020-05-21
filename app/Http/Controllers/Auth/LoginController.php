<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    //protected $redirectTo = RouteServiceProvider::HOME;
    //protected $redirectTo = '/home';

    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->admin == 1 ){
            case 1:
            $this->redirectTo = '/comp/home';
            return $this->redirectTo;
            break;
        }
        switch(Auth::user()->admin == 0 ){
            case 2:
            $this->redirectTo = '/blog';
            return $this->redirectTo;
            break;
        }
        switch(Auth::user()->admin == 2 ){
            case 3:
            $this->redirectTo = '/admin/homeadmin';
            return $this->redirectTo;
            break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
         
      
    } 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   

    /*public function login(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->admin == 1) {
                return redirect()->route('admin_home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login');
        }
          
    }*/
    
}
