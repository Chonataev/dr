<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'question',
    ];

    // Отношение "один ко многим" с моделью Answer
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}
