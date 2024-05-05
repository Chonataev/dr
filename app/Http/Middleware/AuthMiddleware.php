<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Проверяем, аутентифицирован ли пользователь
        if (Auth::check()) {
            // Получаем текущего аутентифицированного пользователя
            $user = Auth::user();

            // Проверяем роль пользователя и перенаправляем соответственно
            if ($user->role === 1 || $user->role === 2) {
                return $next($request);
            } else {
                abort(403);
            }
        }else{
            return redirect()->route('login');
        }
    }
}
