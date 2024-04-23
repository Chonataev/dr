<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Аутентификация успешна
            $user = Auth::user();
            // Успешная аутентификация
            session(['success' => 'Успешная аутентификация']);

            return response()->redirectTo('home');

        }

        // Неверный email или пароль
        session(['error' => 'Неверный email или пароль']);
        return response()->redirectTo('auth.login');

    }
}
