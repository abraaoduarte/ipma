<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('cpf', 20)->nullable();
            $table->string('rg', 20)->nullable();
            $table->boolean('is_admin')->nullable();
            $table->boolean('is_active');
            $table->date('birthday')->nullable();
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
            $table->dropColumn(['cpf', 'rg', 'is_admin', 'is_active', 'birthday']);
        });
    }
}
