<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('course_id')
                  ->references('id')
                  ->on('courses')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
            $table->foreign('app_category_id')
                  ->references('id')
                  ->on('app_categories')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
        Schema::table('staff', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
            $table->foreign('staff_division_id')
                  ->references('id')
                  ->on('staff_divisions')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->foreign('blog_category_id')
                  ->references('id')
                  ->on('blog_categories')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
        Schema::table('students', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
        Schema::table('team_projects', function (Blueprint $table) {
            $table->foreign('project_id')
                  ->references('id')
                  ->on('projects')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
        Schema::table('project_galleries', function (Blueprint $table) {
            $table->foreign('project_id')
                  ->references('id')
                  ->on('projects')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
