<?php namespace Spmda\Animales\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpmdaAnimalesToro extends Migration
{
    public function up()
    {
        Schema::create('spmda_animales_toro', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->integer('caravana');
            $table->integer('hbu');
            $table->string('rp');
            $table->string('pigmentoizquierdo');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('slug')->nullable();
            $table->string('pigmentoderecho');
            $table->string('padre');
            $table->string('abuelom');
            $table->string('hijos');
            $table->string('pavg');
            $table->string('g_epd');
            $table->string('fpdir');
            $table->date('nacido');
            $table->string('destete');
            $table->string('meses15');
            $table->string('meses18');
            $table->string('pa_v');
            $table->string('fpmat');
            $table->string('leche');
            $table->string('aobc');
            $table->string('grasac');
            $table->string('ce');
            $table->string('efc');
            $table->string('indicecria');
            $table->string('indicecompleto');

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spmda_animales_toro');
    }
}







  