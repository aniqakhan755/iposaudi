<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('service_title_1',25);
            $table->string('service_title_2',25);
            $table->string('service_title_3',25);
            $table->string('service_title_4',25);
            $table->string('service_title_5',25);
            $table->string('service_title_6',25);
            $table->string('service_title_7',25);
            $table->string('service_title_8',25);
            $table->string('service_desc_1',90);
            $table->string('service_desc_2',90);
            $table->string('service_desc_3',90);
            $table->string('service_desc_4',90);
            $table->string('service_desc_5',90);
            $table->string('service_desc_6',90);
            $table->string('service_desc_7',90);
            $table->string('service_desc_8',90);
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
        Schema::dropIfExists('service_configurations');
    }
}
