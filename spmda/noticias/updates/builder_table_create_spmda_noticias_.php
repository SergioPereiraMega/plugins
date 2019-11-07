<?php namespace Spmda\Noticias\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpmdaNoticias extends Migration
{
    public function up()
    {
        Schema::create('spmda_noticias_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->integer('order');
            $table->boolean('publish');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spmda_noticias_');
    }
}
