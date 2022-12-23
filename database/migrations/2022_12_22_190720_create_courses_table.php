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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->bigInteger('subCategory_id');
            $table->bigInteger('user_id');
            $table->string('title');
            $table->float('price', 10, 2);
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('image')->nullable();
            $table->string('starting_date');
            $table->string('ending_date');
            $table->string('total_hour');
            $table->string('slug');
            $table->tinyInteger('status')->default(0);
            $table->integer('hit_count')->default(0);
            $table->integer('apply_count')->default(0);
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
        Schema::dropIfExists('courses');
    }
};
