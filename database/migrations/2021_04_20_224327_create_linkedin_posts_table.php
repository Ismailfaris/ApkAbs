<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkedinPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkedin_posts', function (Blueprint $table) {
            $table->id();
            $table->string('share_id', 128);
            $table->text('share_text');
            $table->string('image_asset', 128)->nullable();
            $table->enum('share_visibility',['CONNECTIONS','PUBLIC']);
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
        Schema::dropIfExists('linkedin_posts');
    }
}
