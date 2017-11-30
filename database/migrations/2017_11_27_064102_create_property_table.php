<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Property', function (Blueprint $table) {
            $table->increments('property_id');
            $table->string('title') ->nullable();
            $table->string('property_type') ->nullable();
            $table->text('description') ->nullable();

            $table->double('price') ->nullable();
            $table->string('city') ->nullable();
            $table->string('address') ->nullable();

            $table->text('body') ->nullable();
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
        Schema::dropIfExists('Property');
    }
}
