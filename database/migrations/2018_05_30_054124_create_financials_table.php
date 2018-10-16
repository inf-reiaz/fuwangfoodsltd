<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financials', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('first')->nullable();
            $table->text('first_pdf')->nullable();
            $table->text('half')->nullable();
            $table->text('half_pdf')->nullable();
            $table->text('third')->nullable();
            $table->text('third_pdf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financials');
    }
}
