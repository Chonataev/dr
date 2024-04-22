<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use App\Models\Disqus;

class DisqusController extends Controller
{
    public function index( Request $request, Forum $forum )
    {
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

    public function edit(Forum $forum, $id)
    {
        $forum = Forum::where('id', $id)->first(); // Находим форум по его идентификатору

        if ($forum) {
            $disqus = Disqus::where('forum_id', $forum->id)->get(); // Находим записи Disqus, где forum_id совпадает с идентификатором форума
        }
        return view('admin.disqus.index', compact('disqus'));
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
