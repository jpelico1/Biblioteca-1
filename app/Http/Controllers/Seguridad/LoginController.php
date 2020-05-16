<?php

namespace App\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
       return view('seguridad.index');
    }

    public function username(){
        return 'usuario';
    }

    protected function authenticated(Request $request, $user)
    {
        $roles = $user->roles()->where('estado',1)->get(); 
        if ($roles->isNotEmpty()){
         $user->setSession($roles->toArray()); 
       } else {
           $this->guard()->logout();
           $request->session()->invalidate();
           return redirect('seguridad/login')->withErrors(['error'=>'Estas credenciales no tienen roles activos.']);
       }
    }
}
