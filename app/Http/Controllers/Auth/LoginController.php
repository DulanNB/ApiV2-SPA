<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @throws AuthenticationException
     */
    public function __invoke(Request $request){
        if(!auth()->attempt($request->only('emaillok','password'))){
            throw new AuthenticationException();
        }
    }
}
