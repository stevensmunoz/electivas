<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
// use Illuminate\Contracts\Auth\Guard;
// use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {

    protected $auth;
    protected $registrar;

    public function __construct()
    {
        // $this->auth = $auth;
        // $this->registrar = $registrar;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getRegistrar()
    {
        return view('auth.login');
    }

    public function postRegistrar(Request $request)
    {
        $validator = $this->registrar->validator($request->all());

        if ($validator->fails())
        {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $this->auth->login($this->registrar->create($request->all()));

        return redirect($this->redirectPath());
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required', 'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials, $request->has('remember')))
        {
            return redirect()->intended($this->redirectPath());
        }
        return redirect($this->loginPath())
                    ->withInput($request->only('username', 'remember'))
                    ->withErrors([
                        'username' => $this->getFailedLoginMessage(),
                    ]);
    }

    protected function getFailedLoginMessage()
    {
        return 'These credentials do not match our records.';
    }

    public function getLogout()
    {
        auth()->logout();

        return redirect('/');
    }

    public function redirectPath()
    {
        if (property_exists($this, 'redirectPath'))
        {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/escritorio';
    }

    public function loginPath()
    {
        return property_exists($this, 'loginPath') ? $this->loginPath : '/';
    }

}
