<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elections', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('election_category');
            $table->string('period');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->primary(['election_category', 'period']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elections');
    }
}
