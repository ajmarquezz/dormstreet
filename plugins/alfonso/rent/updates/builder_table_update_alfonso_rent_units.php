<?php namespace Alfonso\Rent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlfonsoRentUnits extends Migration
{
    public function up()
    {
        Schema::table('alfonso_rent_units', function($table)
        {
            $table->date('created_at');
            $table->date('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('alfonso_rent_units', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
