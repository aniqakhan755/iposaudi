<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('sl_subtitle_1');
            $table->string('image_slider1',255);
            $table->string('image_slider2',255);
            $table->string('sl_title_1');
            $table->string('sl_subtitle_2');
            $table->string('sl_title_2');
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
        Schema::dropIfExists('slider_configurations');
    }
}
