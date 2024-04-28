<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
            $user = Auth::user();
            if( $user->role === 1 )
            {
                return redirect()->intended('/')->with('success', 'Вы успешно вошли в систему!');
            }
            else if( $user->role === 2 )
            {
                return redirect()->intended('/')->with('success', 'Вы успешно вошли в систему!');
            }

            // Аутентификация не удалась
            return back()->withErrors([
                'email' => 'Неверные учетные данные.',
            ]);

        }

        // Неверный email или пароль
        session(['error' => 'Неверный email или пароль']);
        return response()->redirectTo('auth.login');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Вы успешно вышли из системы!');
    }
}
