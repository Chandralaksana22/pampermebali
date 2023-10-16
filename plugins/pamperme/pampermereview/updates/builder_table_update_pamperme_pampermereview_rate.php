<?php namespace Pamperme\PampermeReview\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdatePampermePampermereviewRate extends Migration
{
    public function up()
    {
        Schema::table('pamperme_pampermereview_rate', function($table)
        {
            $table->text('photos')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pamperme_pampermereview_rate', function($table)
        {
            $table->dropColumn('photos');
        });
    }
}
