<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('name');
            $table->decimal('ec_amount', 4, 2);
            $table->string('project');
            $table->string('timing');
            $table->string('status')->default('Not started');
            $table->decimal('grade_received', 4, 2)->nullable();
            $table->decimal('overall_ec', 4, 2)->nullable();
            $table->timestamp('passed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
