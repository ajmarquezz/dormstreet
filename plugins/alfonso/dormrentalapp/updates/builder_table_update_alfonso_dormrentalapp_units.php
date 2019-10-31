<?php namespace Alfonso\Dormrentalapp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlfonsoDormrentalappUnits extends Migration
{
    public function up()
    {
        Schema::table('alfonso_dormrentalapp_units', function($table)
        {
            $table->integer('price')->nullable();
            $table->integer('rooms');
            $table->string('type');
        });
    }
    
    public function down()
    {
        Schema::table('alfonso_dormrentalapp_units', function($table)
        {
            $table->dropColumn('price');
            $table->dropColumn('rooms');
            $table->dropColumn('type');
        });
    }
}
