<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * id
name
email
phone
subject
message
ip
status
created_at
updated_at
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->text('message',255)->nullable();
            $table->string('subject',255)->nullable();
            $table->string('ip',255)->nullable();
            $table->string('status',255)->nullable();
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
        Schema::dropIfExists('messages');
    }
}
