<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeed2ndteamToKumiren2membersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kumiren2members', function (Blueprint $table) {
            $table->string('feed2ndteam')->after('feed1stteam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kumiren2members', function (Blueprint $table) {
            $table->dropColumn('feed2ndteam');
        });
    }
}
