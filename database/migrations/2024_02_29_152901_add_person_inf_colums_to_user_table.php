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
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname');
            $table->integer('age');
            $table->string('patronymic')->nullable();
            $table->string('address');
            $table->unsignedSmallInteger('gender');
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
            $table->dropColumn('surname');
            $table->dropColumn('age');
            $table->dropColumn('patronymic');
            $table->dropColumn('address');
            $table->dropColumn('gender');
        });
    }
};
