<?php namespace Pamperme\Gallery\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreatePampermeGallery extends Migration
{
    public function up()
    {
        Schema::create('pamperme_gallery_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('tittle')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pamperme_gallery_');
    }
}
