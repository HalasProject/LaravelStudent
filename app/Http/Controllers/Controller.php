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

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
