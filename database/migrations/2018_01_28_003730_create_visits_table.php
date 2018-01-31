<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('visits')){
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('subject');
            $table->date('date');
            $table->time('start_on')->nullable();
            $table->time('end_on')->nulaable();
            $table->string('refrence')->nullable();
            $table->string('status')->nullable();
            $table->integer('user_id');
            $table->integer('visitor_id');
            $table->timestamps();
        });
      }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
