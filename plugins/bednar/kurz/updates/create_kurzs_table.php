<?php namespace Bednar\Kurz\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateKurzsTable extends Migration
{
    public function up()
    {
        Schema::create('bednar_kurz_kurzs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->integer('teacher_id');
            $table->string('difficulty');
            $table->integer('publisher_id');
            $table->string('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bednar_kurz_kurzs');
    }
}

