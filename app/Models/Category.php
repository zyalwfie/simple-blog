<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['slug', 'name'];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
