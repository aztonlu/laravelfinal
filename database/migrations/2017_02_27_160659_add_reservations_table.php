<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names', 30);
            $table->string('email', 60);
            $table->string('phone', 20)->nullable();
            $table->string('skype', 25)->nullable();
            $table->string('nationality', 25)->nullable();
            $table->date('checkin')->nullable();
            $table->date('checkout')->nullable();
            $table->integer('adults')->nullable();
            $table->integer('Children')->nullable();
            $table->string('guide')->nullable();
            $table->text('message')->nullable();
            $table->integer('user_id')
                ->unsigned()->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->ondelete('cascade');
            $table->enum('status', ['Attended', 'Pending' , 'In atention', 'Cancelled'])
                        ->default('Pending');
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
        Schema::dropIfExists('reservations');
    }
}
