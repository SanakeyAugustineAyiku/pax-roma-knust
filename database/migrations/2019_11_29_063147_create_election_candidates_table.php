<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectionCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election_candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('avatar');
            $table->string('position');
            $table->string('election_name');
            $table->string('election_category');
            $table->integer('votes');
            $table->timestamps();
            $table->foreign(['election_category','election_name'])->references(['election_category','period'])->on('elections')->onDelete('cascade');
            // $table->foreign('election_name')->references('period')->on('elections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('election_candidates');
    }
}
