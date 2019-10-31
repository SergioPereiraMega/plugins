<?php namespace Spmda\Animales\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpmdaAnimalesToro2 extends Migration
{
    public function up()
    {
        Schema::table('spmda_animales_toro', function($table)
        {
            $table->string('hbu', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('spmda_animales_toro', function($table)
        {
            $table->integer('hbu')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
