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
    Schema::table('tasks', function (Blueprint $table) {
        $table->string('title'); // عنوان برنامه
        $table->text('description')->nullable(); // توضیحات برنامه
        $table->boolean('completed')->default(false); // وضعیت برنامه (انجام شده/نشده)
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::table('tasks', function (Blueprint $table) {
        $table->dropColumn(['title', 'description', 'completed']);
    });
}
};