<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id()->comment('タスクID');
            $table->foreignId('module_id')->constrained('modules');
            $table->foreignId('status_id')->constrained('statuses');
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->foreignId('author_id')->constrained('users');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->string('title')->comment('タイトル');
            $table->string('description')->nullable()->comment('タイトル');
            $table->date('deadline')->nullable()->comment('締切日');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
