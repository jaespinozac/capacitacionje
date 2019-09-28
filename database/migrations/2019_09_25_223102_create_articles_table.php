<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('slug');
            $table->bigInteger('created_user');
            $table->bigInteger('updated_user');
            $table->softDeletes();
            $table->timestamps();
            // Id autoincrementable
            //Name, string
            //Description, string
            //Slug, string
    //        Created_user bigInteger
      //      Updated_user bigInteger 


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
