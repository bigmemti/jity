<?php

use App\Models\User;
use App\Models\Field;
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
        Schema::create('field_user', function (Blueprint $table) {
            $table->foreignIdFor(Field::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamps();


            $table->unique([
                'field_id',
                'user_id'
            ], 'FU');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fields_users');
    }
};
