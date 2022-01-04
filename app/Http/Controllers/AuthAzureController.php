<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class AuthAzureController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('azure')->redirect();
    }

    public function callback(Request $request)
    {
        $user = Socialite::driver('azure')->stateless()->user();
        $request = $request;
        return view('logged', compact('user', 'request'));
    }

    public function logout()
    {
        return Redirect::to('https://login.microsoftonline.com/common/oauth2/v2.0/logout');
    }
}
