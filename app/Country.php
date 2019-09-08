<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts() {
        // First param is final target. Second param is intermediate table.
        return $this->hasManyThrough('App\Post', 'App\User');

    }
}
