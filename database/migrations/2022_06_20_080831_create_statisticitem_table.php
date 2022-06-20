<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statisticitem', function (Blueprint $table) {
            $table->id();
            $table->string('title');
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
        Schema::dropIfExists('statisticitem');
    }
}
