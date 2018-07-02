<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
