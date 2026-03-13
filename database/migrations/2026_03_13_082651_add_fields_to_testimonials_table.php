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
        Schema::table('testimonials', function (Blueprint $table) {
            if (!Schema::hasColumn('testimonials', 'nama')) {
                $table->string('nama')->after('id');
            }
            if (!Schema::hasColumn('testimonials', 'jabatan')) {
                $table->string('jabatan')->nullable()->after('nama');
            }
            if (!Schema::hasColumn('testimonials', 'pesan')) {
                $table->text('pesan')->after('jabatan');
            }
            if (!Schema::hasColumn('testimonials', 'rating')) {
                $table->tinyInteger('rating')->default(5)->after('pesan');
            }
            if (!Schema::hasColumn('testimonials', 'foto')) {
                $table->string('foto')->nullable()->after('rating');
            }
            if (!Schema::hasColumn('testimonials', 'youtube_url')) {
                $table->string('youtube_url')->nullable()->after('foto');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropColumn(['nama', 'jabatan', 'pesan', 'rating', 'foto', 'youtube_url']);
        });
    }
};
