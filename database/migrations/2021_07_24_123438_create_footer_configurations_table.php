<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('footer_bg', 255);
            $table->string('address', 255);
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->string('time', 255)->nullable();
            $table->longText('footer_description');
            $table->string('facebook_url', 255)->default('#');
            $table->string('twitter_url', 255)->default('#');
            $table->string('instagram_url', 255)->default('#');
            $table->string('linked_in_url', 255)->default('#');
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
        Schema::dropIfExists('footer_configurations');
    }
}
