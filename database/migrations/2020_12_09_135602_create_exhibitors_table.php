<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibitors', function (Blueprint $table) {
            $table->id();
            $table->integer('hall');
            $table->integer('wing');
            $table->boolean('wing_type');
            $table->integer('area')->default(0);
            $table->double('ammount')->default(0);
            $table->string('company',100);
            $table->string('work_nature',300);
            $table->string('logo',100);
            $table->string('address',100);
            $table->string('name',100);
            $table->string('phone',15);
            $table->string('email',100);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('exhibitors');
    }
}
