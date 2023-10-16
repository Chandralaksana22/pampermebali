<?php namespace Pamperme\PampermeReview\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreatePampermePampermereviewRate extends Migration
{
    public function up()
    {
        Schema::create('pamperme_pampermereview_rate', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('rate')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pamperme_pampermereview_rate');
    }
}
