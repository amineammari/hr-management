<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('performance_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->integer('score');
            $table->text('comments')->nullable();
            $table->date('evaluation_date');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('performance_evaluations');
    }
};
