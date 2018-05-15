<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTourTable extends Migration
{
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 15)->nullable();
            $table->string('titleseo', 50)->nullable();
            $table->string('descriptionseo', 155)->nullable();
            $table->string('keywordseo', 60)->nullable();
            $table->string('title', 60)->nullable();
            $table->enum('state',
                ['draft', 'publish'])
                ->default('draft');
            $table->integer('days')->nullable();
            $table->decimal('price')->nullable();
            $table->integer('peoples')->nullable();
            $table->integer('offer')->nullable();
            $table->text('summary')->nullable();
            $table->text('itinerarie')->nullable();
            $table->text('include')->nullable();
            $table->text('organization')->nullable();
            $table->text('coverpage')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                            ->references('id')
                            ->on('users')
                            ->onDelete('cascade');
            $table->timestamps();
        });

        /******************
         * Tablas Pivote
         ******************/

        Schema::create('subcategory_tour', function (Blueprint $table){
            $table->increments('id');

            $table->integer('tour_id')
                ->unsigned();
            $table->foreign('tour_id')
                ->references('id')
                ->on('tours')
                ->onDelete('cascade');

            $table->integer('subcategory_id')
                ->unsigned();
            $table->foreign('subcategory_id')
                ->references('id')
                ->on('subcategories')
                ->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('country_tour', function (Blueprint $table){
            $table->increments('id');

            $table->integer('tour_id')
                ->unsigned();
            $table->foreign('tour_id')
                ->references('id')
                ->on('tours')
                ->onDelete('cascade');

            $table->integer('county_id')
                ->unsigned();
            $table->foreign('county_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');

            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
