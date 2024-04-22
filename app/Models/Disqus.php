<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disqus extends Model
{
    use HasFactory;

    protected $table = 'disqus'; // Изменение имени таблицы
    protected $fillable = [
        'forum_id',
        'disqus_id',
        'body',
        'status',
    ];

    // Добавьте здесь отношения с другими моделями, если это необходимо
}
