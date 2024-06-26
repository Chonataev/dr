<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {

        $user = Auth::user();

        // Проверяем роль пользователя и перенаправляем соответственно
        if ($user->role === 1) {
            return $next($request);
        } else {
            return redirect()->route('main');
        }
    }
}
