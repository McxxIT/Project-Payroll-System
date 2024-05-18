<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('department_id')->nullable();
            $table->foreignId('position_id')->nullable();
            $table->foreignId('shift_id')->nullable();
            $table->foreign('shift_id')->references('workshift_id')->on('shift'); 
            $table->foreign('department_id')->references('department_id')->on('departments');
            $table->foreign('position_id')->references('position_id')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('department_id');
            $table->dropColumn('position_id');
            $table->dropColumn('shift_id');
        });
    }
};
