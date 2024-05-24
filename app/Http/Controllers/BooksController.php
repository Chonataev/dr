<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Str;

class BooksController extends Controller
{
    // Метод для получения темы по id
    private function getThemeById($themeId)
    {
        return Theme::findOrFail($themeId);
    }

    // Метод для добавления названия темы к книгам
    private function addThemeTitleToBooks($books)
    {
        foreach ($books as $book) {
            if($book->themes_id){
                $theme = $this->getThemeById($book->themes_id);
                $book['theme_title'] = $theme->title;
            }
            else{
                $book['theme_title'] = '';
            }

        }
        return $books;
    }

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $books = Books::all();
        $books = $this->addThemeTitleToBooks($books);
        return view('admin.books.index', compact('books'));
    }

    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $themes = Theme::all();
        return view('admin.books.create', compact('themes'));
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'file_url' => 'required|file',
        ]);

        $file = $request->file('file_url');
        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();

        // Перемещаем файл в директорию public/uploads
        $file->move(public_path('uploads'), $fileName);

        // Создаем запись в базе данных для файла
        $book = new Books();
        $book->title = $request->title;
        $book->type = $request->type;
        $book->file_url = $fileName;
        $book->themes_id = $request->theme_id;
        $book->status = true;
        $book->save();

        return redirect()->route('books.index')->with('success', 'Мазмун ийгиликтүү түзүлдү!');
    }


    public function edit(Books $book): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $themes = Theme::all();
        return view('admin.books.edit', compact('book', 'themes'));
    }

    public function update(Request $request, Books $book): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
        ]);

        // Проверяем, загружен ли новый файл
        if ($request->hasFile('file_url')) {
            $file = $request->file('file_url');
            $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();

            // Перемещаем файл в директорию public/uploads
            $file->move(public_path('uploads'), $fileName);

            // Обновляем имя файла в модели
            $book->file_url = $fileName;
        }

        // Обновляем остальные поля модели
        $book->title = $request->title;
        $book->type = $request->type;
        $book->themes_id = $request->theme_id;
        $book->status = $request->status;
        $book->save();

        return redirect()->route('books.index')->with('success', 'Мазмун ийгиликтүү жаңыртылды!');
    }



    public function destroy(Books $book): RedirectResponse
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Мазмун ийгиликтүү өчүрүлдү!');
    }
}
