<?php namespace Spmda\Animales\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpmdaAnimalesToro extends Migration
{
    public function up()
    {
        Schema::table('spmda_animales_toro', function($table)
        {
            $table->boolean('destacado');
        });
    }
    
    public function down()
    {
        Schema::table('spmda_animales_toro', function($table)
        {
            $table->dropColumn('destacado');
        });
    }
}
