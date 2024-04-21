<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disqus;

class DisqusController extends Controller
{
    public function index()
    {
        $disqusList = Disqus::all();
        return view('disqus.index', compact('disqusList'));
    }

    public function create()
    {
        return view('disqus.create');
    }

    public function store(Request $request)
    {
        // Валидация данных и сохранение в базе
    }

    public function show(Disqus $disqus)
    {
        return view('disqus.show', compact('disqus'));
    }

    public function edit(Disqus $disqus)
    {
        return view('disqus.edit', compact('disqus'));
    }

    public function update(Request $request, Disqus $disqus)
    {
        // Валидация данных и обновление записи в базе
    }

    public function destroy(Disqus $disqus)
    {
        // Удаление записи из базы данных
    }
}
