<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLinkedinPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Linkedin_posts', function (Blueprint $table) {
            $table->bigInteger('post_group');
            $table->foreignId('account_id')->nullable()
                                            ->constrained('Linkedin_accounts')
                                            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Linkedin_posts', function (Blueprint $table) {
            $table->dropColumn('post_group');
            $table->dropForeign(['account_id']);
            $table->dropColumn('account_id');
        });
    }
}
