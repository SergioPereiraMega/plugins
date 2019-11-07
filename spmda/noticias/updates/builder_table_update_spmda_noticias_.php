<?php namespace Spmda\Noticias\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpmdaNoticias extends Migration
{
    public function up()
    {
        Schema::table('spmda_noticias_', function($table)
        {
            $table->string('description');
        });
    }
    
    public function down()
    {
        Schema::table('spmda_noticias_', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
