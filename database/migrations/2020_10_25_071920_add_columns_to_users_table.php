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
            $table->integer("gender_type");
            $table->integer("user_type");
            $table->dateTime("birthday")->nullable();
            $table->integer("transfer_count");
            $table->integer("difficulty_point");
            $table->integer("membership_num");
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
