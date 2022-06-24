<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
                        $table->string('title');
            $table->string('company');
            $table->string('slug')->unique();
            $table->text('location');
            $table->double('salary');
            $table->text('description');
            $table->text('requirements');
            $table->text('benefits');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
