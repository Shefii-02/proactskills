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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name')->nullable();
            $table->string('slug_name')->nullable();
            $table->string('course_time')->nullable();
            $table->string('total_days')->nullable();
            $table->string('picture', 2048)->nullable();
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
            $table->boolean('enable_discount')->default(0)->nullable();
            $table->date('disc_exp_date')->nullable();
            $table->string('level_course')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_sub_title')->nullable();
            $table->string('banner_short_description')->nullable();
            $table->string('banner_btn_color')->nullable();
            $table->string('banner_text_color')->nullable();
            $table->string('banner_btn_text')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_yt_link')->nullable();
            $table->string('bc_title_1')->nullable();
            $table->integer('bc_count_1')->default(0);
            $table->string('bc_title_2')->nullable();
            $table->integer('bc_count_2')->default(0);
            $table->string('bc_title_3')->nullable();
            $table->integer('bc_count_3')->default(0);
            $table->string('review_btn_text')->nullable();
            $table->string('review_text_color')->nullable();
            $table->string('review_btn_color')->nullable();
            $table->string('add_info_title_1')->nullable();
            $table->string('key_notes_1')->nullable();
            $table->string('add_info_title_2')->nullable();
            $table->string('key_notes_2')->nullable();
            $table->string('add_info_image')->nullable();
            $table->string('add_yt_link')->nullable();
            $table->string('add_btn_text')->nullable();
            $table->string('add_btn_color')->nullable();
            $table->string('add_text_color')->nullable();
            $table->string('class_details_title_1')->nullable();
            $table->string('class_details_1')->nullable();
            $table->string('class_details_title_2')->nullable();
            $table->string('class_details_2')->nullable();
            $table->string('trainer_image')->nullable();
            $table->string('trainer_name')->nullable();
            $table->string('trainer_position')->nullable();
            $table->string('trainer_description')->nullable();
            $table->string('seo_titile')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->boolean('status')->default(1);
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
