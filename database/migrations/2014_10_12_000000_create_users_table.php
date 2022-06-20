<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->integer('photo')->nullable();
            $table->integer('status')->default(1);
            $table->integer('type')->nullable();
            $table->unsignedBigInteger('region_id')->index()->nullable();
            $table->foreign('region_id')->references('id')->on('region');
            $table->unsignedBigInteger('district_id')->index()->nullable();
            $table->foreign('district_id')->references('id')->on('district');
            $table->string('address')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
