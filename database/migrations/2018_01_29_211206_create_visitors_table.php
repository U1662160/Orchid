<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('visitors')) {

        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('position')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('company_id');
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
        Schema::dropIfExists('visitors');
    }
}
