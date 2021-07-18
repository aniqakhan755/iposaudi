<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('sl_subtitle_1');
            $table->string('sl_title_1');
            $table->string('sl_subtitle_2');
            $table->string('sl_title_2');
            $table->string('about_us_title');
            $table->string('about_us_subtitle');
            $table->string('about_us_desc');
            $table->string('service_title_1',25);
            $table->string('service_title_2',25);
            $table->string('service_title_3',25);
            $table->string('service_title_4',25);
            $table->string('service_title_5',25);
            $table->string('service_title_6',25);
            $table->string('service_title_7',25);
            $table->string('service_title_8',25);
            $table->string('service_desc_1',85);
            $table->string('service_desc_2',85);
            $table->string('service_desc_3',85);
            $table->string('service_desc_4',85);
            $table->string('service_desc_5',85);
            $table->string('service_desc_6',85);
            $table->string('service_desc_7',85);
            $table->string('service_desc_8',85);


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
        Schema::dropIfExists('site_configurations');
    }
}
