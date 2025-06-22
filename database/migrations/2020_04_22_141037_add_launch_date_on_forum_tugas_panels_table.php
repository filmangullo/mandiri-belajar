<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLaunchDateOnForumTugasPanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forum_tugas_panels', function (Blueprint $table) {
            $table->dateTime('launch_date')->nullable()->after('open_tugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forum_tugas_panels', function (Blueprint $table) {
            //
        });
    }
}
