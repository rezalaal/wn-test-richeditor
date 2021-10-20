<?php namespace Rezalael\Test\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateTestModelsTable extends Migration
{
    public function up()
    {
        Schema::create('rezalael_test_test_models', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('subject');
            $table->text('content')->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rezalael_test_test_models');
    }
}
