<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo', 255);
            $table->string('slogan', 255);
            $table->string('link', 255);
            $table->string('title', 255);
            $table->text('description');
            $table->text('address');
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->string('facebook', 255);
            $table->string('twitter', 255);
            $table->string('meta_keywords', 255)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_informations');
    }
}
