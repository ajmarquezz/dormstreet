<?php namespace Alfonso\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlfonsoRentUnits6 extends Migration
{
    public function up()
    {
        Schema::table('alfonso_rent_units', function($table)
        {
            $table->dropColumn('test');
        });
    }
    
    public function down()
    {
        Schema::table('alfonso_rent_units', function($table)
        {
            $table->integer('test');
        });
    }
}
