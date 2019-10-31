<?php namespace Alfonso\Dormrentalapp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlfonsoDormrentalappUnits3 extends Migration
{
    public function up()
    {
        Schema::table('alfonso_dormrentalapp_units', function($table)
        {
            $table->string('location');
        });
    }
    
    public function down()
    {
        Schema::table('alfonso_dormrentalapp_units', function($table)
        {
            $table->dropColumn('location');
        });
    }
}
