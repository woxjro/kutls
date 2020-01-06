<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeed1stteamToKumiren2membersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kumiren2members', function (Blueprint $table) {
            $table->string('feed1stteam')->after('role');
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
            $table->dropColumn('feed1stteam');
        });
    }
}
