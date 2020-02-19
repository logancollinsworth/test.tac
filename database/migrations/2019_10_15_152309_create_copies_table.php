<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('page')->nullable();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('desc')->nullable();

            $table->string('style')->default('normal');
            $table->string('cascade_position')->nullable();

            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('copy');
    }
}
