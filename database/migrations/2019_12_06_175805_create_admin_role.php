<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_roles', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('admin_id')->unsigned();
            $table->timestamps();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_roles');
    }
}
