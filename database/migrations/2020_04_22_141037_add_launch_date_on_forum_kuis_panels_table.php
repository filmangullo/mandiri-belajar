<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLaunchDateOnForumKuisPanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forum_kuis_panels', function (Blueprint $table) {
            $table->dateTime('launch_date')->nullable()->after('open_soal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forum_kuis_panels', function (Blueprint $table) {
            //
        });
    }
}
