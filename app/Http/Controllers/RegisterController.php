<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
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
            'role' => 12, // Устанавливаем роль по умолчанию
        ]);

        if ($user) {
            // Регистрация прошла успешно, перенаправляем на страницу входа с сообщением об успехе
            return redirect()->route('login')->with('success', 'Регистрация прошла успешно!');
        } else {
            // Если возникли проблемы при создании пользователя, перенаправляем назад с сообщением об ошибке
            return back()->withErrors(['registration_error' => 'Ошибка при регистрации. Пожалуйста, попробуйте снова.']);
        }
    }
}
