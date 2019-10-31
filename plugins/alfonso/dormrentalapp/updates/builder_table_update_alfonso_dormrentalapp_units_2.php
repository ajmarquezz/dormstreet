<?php namespace Alfonso\Dormrentalapp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlfonsoDormrentalappUnits2 extends Migration
{
    public function up()
    {
        Schema::table('alfonso_dormrentalapp_units', function($table)
        {
            $table->integer('roomsize');
            $table->integer('occupancy');
        });
    }
    
    public function down()
    {
        Schema::table('alfonso_dormrentalapp_units', function($table)
        {
            $table->dropColumn('roomsize');
            $table->dropColumn('occupancy');
        });
    }
}
