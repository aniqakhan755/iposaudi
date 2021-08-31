<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipos', function (Blueprint $table) {
            $table->id();
            $table->string('market_type',255);
            $table->string('instrument',255);
            $table->string('company_name',255);
            $table->bigInteger('offering_size')->nullable();
            $table->bigInteger('offering_price');
            $table->date('offering_date');
            $table->date('closing_date');
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
        Schema::dropIfExists('ipos');
    }
}
