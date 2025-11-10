<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan semua migrasi.
     */
    public function up(): void
    {
        // =======================
        // 1. USERS
        // =======================
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // =======================
        // 2. BANNERS
        // =======================
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url_image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // =======================
        // 3. CLIENTS
        // =======================
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
        });

        // =======================
        // 4. CLIENT REVIEWS
        // =======================
        Schema::create('client_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->string('reviewer_name');
            $table->string('position')->nullable();
            $table->text('review');
            $table->unsignedTinyInteger('rating')->default(5); // 1–5 stars
            $table->string('avatar')->nullable();
            $table->timestamps();
        });

        // =======================
        // 5. PROJECTS
        // =======================
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('technologies')->nullable();
            $table->string('link')->nullable();
            $table->foreignId('client_id')->nullable()->constrained('clients')->onDelete('set null');
            $table->string('platform')->nullable();
            $table->timestamps();
        });

        // =======================
        // 6. CONTACT MESSAGES
        // =======================
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('subject')->nullable();
            $table->text('message');
            $table->timestamps();
        });

        // =======================
        // 7. SOCIAL MEDIAS
        // =======================
        Schema::create('social_medias', function (Blueprint $table) {
            $table->id();
            $table->string('platform');
            $table->string('url');
            $table->string('icon_class')->nullable();
            $table->timestamps();
        });

        // =======================
        // 8. SERVICES
        // =======================
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Batalkan semua migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('social_medias');
        Schema::dropIfExists('contact_messages');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('client_reviews');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('banners');
        Schema::dropIfExists('users');
    }
};
