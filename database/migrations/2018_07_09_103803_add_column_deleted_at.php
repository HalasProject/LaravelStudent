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

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDeletedAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Messages', function (Blueprint $table) {
            $table->softdeletes('deleted_at')->nullable()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Messages', function (Blueprint $table) {
            $table->DropDolumn('deleted_at');
        });
    }
}
