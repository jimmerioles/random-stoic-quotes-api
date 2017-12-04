<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    /**
     * Get the author that owns the quote.
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
