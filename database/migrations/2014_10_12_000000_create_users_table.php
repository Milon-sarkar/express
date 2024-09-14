<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('address')->nullable();
            $table->string('raf_name')->nullable();
            $table->string('raf_phone')->nullable();
            $table->string('raf_address')->nullable();
            $table->string('zone_id');
            $table->string('emg_name')->nullable();
            $table->string('emg_relation')->nullable();
            $table->string('emg_phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
