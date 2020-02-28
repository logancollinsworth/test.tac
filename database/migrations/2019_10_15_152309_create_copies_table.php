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
            $table->string('headline')->nullable();
            $table->string('headline-m')->nullable();
            $table->string('subheading')->nullable();
            $table->string('paragraph')->nullable();
            $table->string('button-text')->nullable();
            $table->string('learn-text')->nullable();
            $table->string('misc-text')->nullable();

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
