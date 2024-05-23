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
            $table->bigInteger('income_id');
            $table->integer('userID');
            $table->bigInteger('workDays');
            $table->bigInteger('hourlyRate');
            $table->bigInteger('hoursRendered');
            $table->bigInteger('totalIncome');

            $table->bigInteger('RegOT');
            $table->bigInteger('SunOT');
            $table->bigInteger('HolOT');
            $table->bigInteger('Allowances');
            $table->bigInteger('Incentives');
            $table->bigInteger('Bonuses');
            $table->bigInteger('otTotal');

            $table->bigInteger('philHealth');
            $table->bigInteger('pagIbig');
            $table->bigInteger('sss');

            $table->bigInteger('totalDeduction');

            $table->bigInteger('totalSalary');


            $table->date('datefrom');
            $table->date('dateto');

            $table->foreign('userID')->references('userID')->on('users');
            $table->bigInteger('grossSalary');
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
