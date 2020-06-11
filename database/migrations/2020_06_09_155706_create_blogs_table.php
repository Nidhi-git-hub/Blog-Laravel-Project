<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blogHeading');
            $table->string('blogPhotoSmall');
            $table->string('blogIntroSmall');
            $table->string('blogPhoto1');
            $table->string('blogIntro');
            $table->string('blogExample');
            $table->string('blogTypo');
            $table->string('blogPoints');
            $table->string('blogQuote');
            $table->string('blogTable');
            $table->string('blogTweet');
            $table->string('blogVideoIntro');
            $table->string('blogPhoto2');
            $table->string('blogPromo');
            $table->string('blogPhoto3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
