<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Photo extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title', 'description'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function authors()
    {
        return $this->hasMany(Author::class);
    }
}
