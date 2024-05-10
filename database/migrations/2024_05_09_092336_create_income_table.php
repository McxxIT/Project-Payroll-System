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
        Schema::create('income', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->integer('workDays');
            $table->integer('hourlyRate');
            $table->integer('hoursRendered');
            $table->integer('incomeTotal');

            $table->integer('RegOT');
            $table->integer('SunOT');
            $table->integer('HolOT');
            $table->integer('Allowances');
            $table->integer('Incentives');
            $table->integer('Bonuses');
            $table->integer('otTotal');

            $table->integer('grossSalary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income');
    }
};
