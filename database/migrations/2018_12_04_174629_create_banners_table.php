<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->string('keywords')->nullable()->comment('关键词');
            $table->text('description')->nullable()->comment('描述');
            $table->string('pic_url')->comment('原图链接地址');
            $table->string('thumbnail_url')->comment('缩略图链接地址');
            $table->enum('is_display', [1, 2])->default(1)->index()->comment('1显示2隐藏');
            $table->enum('is_single', [1, 2])->default(1)->comment('1单页，2外链');
            $table->string('url')->nullable()->comment('外链地址');
            $table->mediumText('content')->nullable()->comment('单页内容');
            $table->unsignedInteger('view_count')->default(0)->comment('浏览次数');
            $table->unsignedInteger('admin_id')->comment('作者id');
            $table->string('author')->comment('作者');
            $table->ipAddress('ip')->comment('录入者IP');
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
        Schema::dropIfExists('banners');
    }
}
