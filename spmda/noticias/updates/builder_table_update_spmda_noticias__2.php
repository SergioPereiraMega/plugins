<?php namespace Spmda\Noticias\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpmdaNoticias2 extends Migration
{
    public function up()
    {
        Schema::table('spmda_noticias_', function($table)
        {
            $table->string('description', 960)->change();
        });
    }
    
    public function down()
    {
        Schema::table('spmda_noticias_', function($table)
        {
            $table->string('description', 191)->change();
        });
    }
}
