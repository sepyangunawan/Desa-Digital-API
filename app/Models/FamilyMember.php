<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('head_of_family_id');
            $table->foreign('head_of_family_id')->references('id')->on('head_of_families');

            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('profile_picture');
            $table->integer('identity_number');
            $table->enum('gender', ['male', 'female']);
             $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('occupation');
            $table->enum('marital_status', ['single', 'married']);
            $table->enum('relation', ['wife', 'child','husband']);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }

};
