<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * Get the quotes of author.
     */
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
