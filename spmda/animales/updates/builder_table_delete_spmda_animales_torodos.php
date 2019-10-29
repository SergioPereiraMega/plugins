<?php namespace Spmda\Animales\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSpmdaAnimalesTorodos extends Migration
{
    public function up()
    {
        Schema::dropIfExists('spmda_animales_torodos');
    }
    
    public function down()
    {
        Schema::create('spmda_animales_torodos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nombre', 191);
            $table->integer('caravana')->nullable();
            $table->integer('hbu');
            $table->string('rp', 191);
            $table->string('pigmentoizquierdo', 191)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('slug', 191)->nullable();
            $table->string('pigmentoderecho', 191);
            $table->string('padre', 191);
            $table->string('abuelom', 191);
            $table->string('hijos', 191);
            $table->string('pavg', 191);
            $table->string('g-epd', 191);
            $table->string('fpdir', 191);
            $table->date('nacido');
            $table->string('destete', 191);
            $table->string('15meses', 191);
            $table->string('18meses', 191);
            $table->string('pa_v', 191);
            $table->string('fpmat', 191);
            $table->string('leche', 191);
            $table->string('aobc', 191);
            $table->string('grasac', 191);
            $table->string('ce', 191);
            $table->string('efc', 191);
            $table->string('indicecria', 191);
            $table->string('indicecompleto', 191);
        });
    }
}
