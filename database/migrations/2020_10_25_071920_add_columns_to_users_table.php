<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer("gender_type")->nullable();
            $table->integer("user_type")->nullable();
            $table->dateTime("birthday")->nullable();
            $table->integer("transfer_count")->nullable();
            $table->integer("difficulty_point")->nullable();
            $table->integer("membership_num")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->dropColumn('gender_type');
            // $table->dropColumn('user_type');
            // $table->dropColumn('birthday');
            // $table->dropColumn('transfer_num');
            // $table->dropColumn('difficulty_point');
            // $table->dropColumn('membership_num');
        });
    }
}
