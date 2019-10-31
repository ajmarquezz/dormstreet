<?php namespace Alfonso\Dormrentalapp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlfonsoDormrentalappUnits extends Migration
{
    public function up()
    {
        Schema::create('alfonso_dormrentalapp_units', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alfonso_dormrentalapp_units');
    }
}
