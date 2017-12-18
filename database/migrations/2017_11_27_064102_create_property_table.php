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


    protected $filable =['path'];
    public function up()
    {
        Schema::create('Property', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title') ->nullable();


            $table->tinyInteger('status') ->default('0');
            $table->tinyInteger('hot') ->default('0');
            $table->tinyInteger('superhot') ->default('0');




                        $table->integer("user_id")->unsigned();


            $table->string('purpose') ->nullable();
            $table->tinyInteger('ad_status') ->default('1');
            $table->string('property_type') ->nullable();
            $table->text('description') ->nullable();

            $table->double('price') ->nullable();
            $table->string('city') ->nullable();
            $table->string('address') ->nullable();
            $table->string('unit_type') ->nullable();
            $table->string('unit_size') ->nullable();

            $table->string('position') ->nullable();

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
