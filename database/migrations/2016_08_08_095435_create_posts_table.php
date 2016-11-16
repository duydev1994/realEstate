<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index();
            $table->integer('user_id')->index()->default(0);
            $table->integer('ward_id')->index()->default(0);
            $table->integer('district_id')->index()->default(0);
            $table->integer('city_id')->index()->default(0);
            $table->integer('country_id')->index()->default(0);
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('picture_1');
            $table->string('picture_2');
            $table->string('picture_3');
            $table->string('picture_4');
            $table->string('picture_5');
            $table->string('picture_6');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->string('meta_custom_title');
            $table->string('video');
            $table->string('money');
            $table->string('acreage');
            $table->double('longitude')->index()->default(0); // Kinh độ
            $table->double('latitude')->index()->default(0);// Vĩ độ
            $table->integer('view_count');
            $table->tinyInteger('meta_robot_index')->length(2)->index();
            $table->tinyInteger('meta_robot_follow')->length(2)->index();
            $table->tinyInteger('status')->length(2)->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
