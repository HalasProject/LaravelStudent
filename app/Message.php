<?php

/*
|--------------------------------------------------------------------------
| StudNote v1
|--------------------------------------------------------------------------
| Contact me for anything that concerns the project ! :)
| Creator : Salah Eddine Bentayeb
| GitHub  : https://github.com/HalasProject/
| Facebook: https://www.facebook.com/BentayebSalah
| Twitter : https://twitter.com/halasdior
| LinkedIn: https://www.linkedin.com/in/salahbentayeb/
| 
*/

namespace App;

use Illuminate\Database\Eloquent\softdeletes;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	use softdeletes;

    protected $dates = ['deleted_at'];
}
