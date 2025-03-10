<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('cu_code');
            $table->string('course_name');
            $table->decimal('credits', 4, 2);
            $table->timestamp('passed_at')->nullable();
            $table->string('exam_name');
            $table->float('weighing_factor');
            $table->decimal('lowest_passing_grade', 4, 2);
            $table->decimal('best_grade', 4, 2)->nullable();
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
