<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('ClubId');
            $table->string('ClubName');
            $table->string('Address1')->nullable();
            $table->string('Address2')->nullable();
            $table->string('City')->nullable();
            $table->string('State')->nullable();
            $table->string('ZipCode')->nullable();
            $table->boolean('active')->default(1);
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('hours')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
