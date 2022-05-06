<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('detail')->nullable();
            $table->string('novel')->nullable();
            $table->string('classic')->nullable();
            $table->string('psychology')->nullable();
            $table->string('religion')->nullable();
            $table->string('college_preparatory_books')->nullable();
            $table->string('history')->nullable();
            $table->string('story')->nullable();
            $table->string('computer_science')->nullable();
            $table->string('personal_developments_books')->nullable();
            $table->string('english')->nullable();
            $table->string('cookbooks')->nullable();
            $table->string('poem')->nullable();
            $table->string('status',6)->default('False');
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
        Schema::dropIfExists('books');
    }
}
