<?php namespace Bednar\Kurz\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateKroksTable extends Migration
{
    public function up()
    {
        Schema::create('bednar_kurz_kroks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->integer('course_id');
            $table->string('video');
            $table->string('google_docs');
            $table->string('description');
            $table->intiger('position');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bednar_kurz_kroks');
    }
}
