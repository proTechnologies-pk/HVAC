<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('owner_id');
            $table->string('site_logo');
            $table->string('address');
            $table->bigInteger('contact_number');
            $table->string('email');
            $table->string('owner_name');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('instagram');
            $table->bigInteger('is_open');
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
        Schema::dropIfExists('setting');
    }
}
