<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
