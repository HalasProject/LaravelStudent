<?php

namespace App;

use Illuminate\Database\Eloquent\softdeletes;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	use softdeletes;

    protected $dates = ['deleted_at'];
}
