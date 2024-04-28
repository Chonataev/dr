<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'user_id',
        'theme_id',
    ];

    // Здесь вы можете определить отношения с другими моделями, если это необходимо

    // Пример отношения с моделью User (один ко многим)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
