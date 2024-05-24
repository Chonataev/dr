<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        if (Auth::check()) {
            // Получаем текущего аутентифицированного пользователя
            $user = Auth::user();

            // Проверяем роль пользователя и перенаправляем соответственно
            if ($user->role === 1) {
                return redirect()->intended('admin/themes');
            }
            elseif($user->role === 2){
                return redirect()->route('main');
            }
            else {
                abort(403);
            }
        }else{
            return view('auth.login');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if( $user->role === 1 )
            {
                return redirect()->intended('/admin')->with('success', 'Сиз ийгиликтүү кирдиңиз!');
            }
            else if( $user->role === 2 )
            {
                return redirect()->intended('/')->with('success', 'Сиз ийгиликтүү кирдиңиз!');
            }

            // Аутентификация не удалась
            return back()->withErrors([
                'email' => 'Неверные учетные данные.',
            ]);
        }else{
            session(['error' => 'Неверный email или пароль']);
            return redirect()->route('login')->with('error', 'Жараксыз электрондук почта же сырсөз');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Сиз ийгиликтүү чыктыңыз!');
    }
}
