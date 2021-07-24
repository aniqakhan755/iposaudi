<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('about_us_title');
            $table->string('about_us_subtitle');
            $table->string('image_about',255);
            $table->text('about_us_desc');


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
        Schema::dropIfExists('about_configurations');
    }
}
