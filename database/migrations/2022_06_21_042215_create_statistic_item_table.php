<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistic_item', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('comparedyear')->nullable();
            $table->integer('olddata');
            $table->integer('data');
            $table->string('secondary')->nullable();
            $table->integer("file_id")->nullable();
            $table->string('description')->nullable();
            $table->integer('sort')->nullable();
            $table->integer("status")->default(1);
            $table->integer('parent_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('statistic_item');
    }
}
