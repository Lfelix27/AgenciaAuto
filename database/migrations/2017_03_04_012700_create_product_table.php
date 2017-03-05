<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
   */

    public function up()
    {
      Schema::create('products', function (Blueprint $table)
      {
        $table->string('id',100);
        $table->string('mark',100);
        $table->string('color',100);
        $table->decimal('precio',5,2);
        $table->integer('numpuertas',1);
        $table->integer('mark_id')->unsigned();

      //  $table->primarykey('modelo');
        $table->foreign('mark_id')->referencces('id')->on('marks');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
