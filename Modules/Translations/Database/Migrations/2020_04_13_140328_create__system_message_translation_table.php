<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemMessageTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_system_message_translation', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->text('translation');
            $table->index(['id', 'language']);
            $table->timestamps();

            $table->foreign('id')->references('id')->on('_system_message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_system_message_translation')->disableForeignKeyConstraints();
    }
}
