<?php

use App\Models\Time;
use App\Models\WeekDay;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Time::class)->constrained();
            $table->foreignIdFor(WeekDay::class)->constrained();
            $table->timestamps();

            $table->unique([
                'time_id',
                'week_day_id'
            ], 'TWD');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
