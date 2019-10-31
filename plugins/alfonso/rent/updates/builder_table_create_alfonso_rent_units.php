<?php namespace Alfonso\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlfonsoRentUnits extends Migration
{
    public function up()
    {
        Schema::create('alfonso_rent_units', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('type');
            $table->string('location');
            $table->string('roomsize');
            $table->string('description');
            $table->integer('total_occupancy');
            $table->integer('price');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alfonso_rent_units');
    }
}
