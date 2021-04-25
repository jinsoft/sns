<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('title')->comment('标题');
            $table->text('content')->comment('内容'); // 帖子量在达到一定量后需要把这个字段单独出去
            $table->tinyInteger('home_top')->default(0)->comment('首页置顶 0 未置顶 1 已置顶');
            $table->timestamp('home_top_time')->comment('首页置顶时间');
            $table->tinyInteger('category_top')->default(0)->comment('栏目置顶 0 未置顶 1 已置顶');
            $table->timestamp('category_top_time')->useCurrent()->comment('首页置顶时间');
            $table->integer('view')->unsigned()->nullable(false)->default(0)->comment('查看');
            $table->integer('like')->unsigned()->nullable(false)->default(0)->comment('喜欢');
            $table->integer('top')->unsigned()->nullable(false)->default(0)->comment("置顶");
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
        Schema::dropIfExists('posts');
    }
}
