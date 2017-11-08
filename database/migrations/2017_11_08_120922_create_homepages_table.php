<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('header_image');
            $table->string('headline');
            $table->string('headline_brief');
            $table->string('services_brief');
            $table->string('service_1');
            $table->string('service_2');
            $table->string('service_3');
            $table->string('service_4');
            $table->integer('phone');
            $table->string('email');
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
        Schema::dropIfExists('homepages');
    }
}
