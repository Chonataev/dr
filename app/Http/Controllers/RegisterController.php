<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
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
            return view('auth.register');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Создание нового пользователя
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 2, // Устанавливаем роль по умолчанию
        ]);

        if ($user) {
            // Регистрация прошла успешно, перенаправляем на страницу входа с сообщением об успехе
            return redirect()->route('login')->with('success', 'Каттоо ийгиликтүү аяктады!');
        } else {
            // Если возникли проблемы при создании пользователя, перенаправляем назад с сообщением об ошибке
            return back()->withErrors(['registration_error' => 'Каттоо учурунда ката. Сураныч, кайра аракет кылыңыз.']);
        }
    }
}
