<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->string('link')->nullable();
            $table->string('guid')->nullable();
            $table->string('pubDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('link');
            $table->dropColumn('guid');
            $table->dropColumn('pubDate');
        });
    }
};
