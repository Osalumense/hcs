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
            $table->bigIncrements('id');
            $table->string('first_name', 30)->nullable();
            $table->string('last_name', 30)->nullable();
            $table->enum('gender', ['10', '20', '30'])->nullable();
            $table->string('email')->unique();
            $table->string('mobile_number', 15)->nullable();
            $table->string('patient_id', 100);
            $table->string('staff_id', 100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('type', [10, 20, 30]);
            $table->enum('is_active', [0, 1])->default(1);
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
