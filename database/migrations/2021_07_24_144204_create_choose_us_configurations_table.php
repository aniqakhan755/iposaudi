<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChooseUsConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choose_us_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('choose_us_title',255);
            $table->string('heading_1',255);
            $table->string('heading_2',255);
            $table->longText('heading1_desc');
            $table->longText('heading2_desc');
            $table->string('image_choose_us',255);
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
        Schema::dropIfExists('choose_us_configurations');
    }
}
