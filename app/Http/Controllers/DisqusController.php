<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Disqus;

class DisqusController extends Controller
{

    public function create($forum_id)
    {
        // Получите тест по его идентификатору
        $forum = Forum::findOrFail($forum_id);

        return view('admin.disqus.create', compact('forum'));
    }

    public function store($forum_id, Request $request)
    {
        $request->validate([
            'body' => 'required|string',
        ]);

        // Создание новой записи disqus
        $disqus = new Disqus();
        $disqus->forum_id = $forum_id;
        $disqus->body = $request->body;
        $disqus->status = true; // Установка статуса по умолчанию, если требуется
        $disqus->save();

        // Редирект на страницу с подробностями форума или куда угодно еще
        return redirect()->route('forums.show', $disqus->forum_id)->with('success', 'Disqus created successfully!');
    }


    /**
     * Remove the specified question from storage.
     *
     * @param Forum $forum
     * @param Disqus $disqus
     * @return RedirectResponse
     */
    public function destroy(Forum $forum, Disqus $disqus): RedirectResponse
    {
        $disqus->delete();

        $forum_id = $forum->id;
        return redirect()->route('forums.index', ['forum' => $forum_id])->with('success', 'Question updated successfully!');
    }
}
