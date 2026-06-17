<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique(); // কাস্টমারের মেইন আইডেন্টিটি
            $table->string('email')->nullable()->unique(); // ইমেইল ফাঁকা থাকতে পারবে
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(); // পাসওয়ার্ড পরে সেট করার জন্য nullable রাখলাম
            $table->string('referral_code')->unique(); // ইউজারের নিজস্ব রেফারেল কোড
            
            // MLM Placement & Sponsor IDs
            $table->foreignId('sponsor_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('parent_id')->nullable()->constrained('users')->onDelete('set null');
            $table->enum('position', ['left', 'right'])->nullable(); // বাইনারি পজিশন
            
            // Role: admin, agent, user
            $table->enum('role', ['admin', 'agent', 'user'])->default('user');
            
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};