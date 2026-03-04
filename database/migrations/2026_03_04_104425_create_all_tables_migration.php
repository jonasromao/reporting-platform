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
        // Schools table
        Schema::create("schools", function (Blueprint $table) {
            $table->id();
            $table->string("name")->index();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->timestamps();
        });

        // Classes table
        Schema::create("classrooms", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("label"); // "turma" translated to a generic "label" for class ID/section
            $table->foreignId("school_id")->constrained("schools")->onDelete("cascade");
            $table->timestamps();
        });

        // Classrooms Contents table
        Schema::create("classrooms_contents", function (Blueprint $table) {
            $table->id();
            $table->foreignId("classroom_id")->constrained("classrooms")->onDelete("cascade");
            $table->string("name");
            $table->text("description");
            $table->date("started_date")->nullable();
            $table->date("end_date")->nullable();
            $table->timestamps();
        });

        // Students table
        Schema::create("students", function (Blueprint $table) {
            $table->id();
            $table->foreignId("classroom_id")->constrained("classrooms")->onDelete("cascade");
            $table->foreignId("school_id")->constrained("schools")->onDelete("cascade");
            $table->string("name");
            $table->text("characteristics");
            $table->date("birth_date");
            $table->timestamps();
        });

        // Students Observation table
        Schema::create("students_observation", function (Blueprint $table) {
            $table->id();
            $table->foreignId("student_id")->constrained("students")->onDelete("cascade");
            $table->text("description");
            $table->foreignId("classroom_content_id")
                ->nullable()
                ->constrained("classrooms_contents")
                ->nullOnDelete();
            $table->timestamps();
        });

        // Tools table
        Schema::create("tools", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->timestamps();
        });

        // Requests table
        Schema::create("requests", function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->string("name");
            $table->foreignId("student_id")->nullable()->constrained("students")->onDelete("set null");
            $table->foreignId("tool_id")->constrained("tools")->onDelete("cascade");
            $table->binary("request_data");
            $table->timestamp("returned_at")->nullable();
            $table->binary("response_data")->nullable();
            $table->text("classification");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("students_observation");
        Schema::dropIfExists("classrooms_contents");
        Schema::dropIfExists("requests");
        Schema::dropIfExists("tools");
        Schema::dropIfExists("students");
        Schema::dropIfExists("classrooms");
        Schema::dropIfExists("schools");
    }
};