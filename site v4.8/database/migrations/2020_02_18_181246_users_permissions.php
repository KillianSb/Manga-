<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersPermissions extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('users_permissions', function (Blueprint $table) {
$table->integer('user_id')->unsigned()->index();
$table->integer('permission_id')->unsigned()->index();

$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
$table->foreign('permission_id')->references('id')->on('permissions')->onUpdate('cascade')->onDelete('cascade');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::drop('users_permissions');
}
}
