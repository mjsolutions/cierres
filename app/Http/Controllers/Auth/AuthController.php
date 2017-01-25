<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    // protected $redirectTo = '/admin';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            ]);
    }

    protected function create(array $data)
    {
        return User::create([
            // 'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            ]);
    }

    protected function getLogin()
    {
        return view('login');
    }

    protected function postLogin(Request $data)
    {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array('email' => $data->email, 'password' => $data->password);
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata, 0))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return view('admin.inicio');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return view('login')->with('mensaje_error', 'Tus datos son incorrectos');
    }

    protected function getLogout()
    {
        Auth::logout();
        return view('login')->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }

    public function redirectPath()
    {
    // Logic that determines where to send the user
        return '/admin';
    }

}
