<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function posts() {

        return $this->morpedByMany('App\Post', 'taggable');

    }

    public function videos() {

        return $this->morpedByMany('App\Video', 'taggable');

    }
}
