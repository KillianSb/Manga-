<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Permissions extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('permissions', function (Blueprint $table) {
$table->increments('id');
$table->string('permission', 32);
$table->unique('permission');
$table->string('name', 32);
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::drop('permissions');
}
}
