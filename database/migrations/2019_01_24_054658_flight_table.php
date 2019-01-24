<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table){
            $table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('paper');
            $table->string('name');
            $table->string('airline');
            $table->timestamps();
        });

        Schema::create('paper', function (Blueprint $abc){
            $abc->increments('id');
            $abc->integer('number')->default('2');
            $abc->string('quality');
            $abc->integer('weight(kg)');
            $abc->timestamps();
        });

        Schema::rename('flights', 'belon');

        Schema::table('paper', function (Blueprint $table){
            $table->string('quality', 50)->change();
            $table->string('quality', 50)->nullable()->change();
            $table->integer('weight(kg)')->after('number')->change();
            // $table->renameColumn('quality', 'qualities');
            // $table->dropColumn(['number', 'weight(kg)']);
            $table->index('weight(kg)');
            // $table->renameIndex('weight(kg)', 'wet kg');
        });

        // Schema::enableForeignKeyConstraints();
        Schema::disableForeignKeyConstraints();
    }
    
    public function down()
    {
        Schema::drop('flights');
    }
}