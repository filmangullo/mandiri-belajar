<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImgOnOptionOnForumKuissTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forum_kuiss', function (Blueprint $table) {
            $table->text('img_pilihan_a')->nullable()->after('pilihan_a');
            $table->string('extension_img_pilihan_a')->nullable()->after('img_pilihan_a');

            $table->text('img_pilihan_b')->nullable()->after('pilihan_b');
            $table->string('extension_img_pilihan_b')->nullable()->after('img_pilihan_b');

            $table->text('img_pilihan_c')->nullable()->after('pilihan_c');
            $table->string('extension_img_pilihan_c')->nullable()->after('img_pilihan_c');

            $table->text('img_pilihan_d')->nullable()->after('pilihan_d');
            $table->string('extension_img_pilihan_d')->nullable()->after('img_pilihan_d');

            $table->text('img_pilihan_e')->nullable()->after('pilihan_e');
            $table->string('extension_img_pilihan_e')->nullable()->after('img_pilihan_e');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forum_kuiss', function (Blueprint $table) {
            //
        });
    }
}
