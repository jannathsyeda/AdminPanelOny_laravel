<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    return $this->belongsTo('App\Author');
