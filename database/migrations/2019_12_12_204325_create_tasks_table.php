<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable(false);
            $table->text('description')->nullable(false);
            $table->bigInteger('ownerId', false, true)->nullable(false);
            $table->bigInteger('freelancerId', false, true)->nullable(true);
            $table->string('status')->nullable(false);
            $table->timestamps();

            $table->index('status', 'statusIDX', 'HASH');
            $table->foreign('ownerId', 'ownerFK')->references('id')->on('users');
            $table->foreign('freelancerId', 'freelanceFK')->references('id')->on('users');
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
}
