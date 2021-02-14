<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    return $this->hasOne('App\Profile');
}
