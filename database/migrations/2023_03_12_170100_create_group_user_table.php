<?php

use App\Models\User;
use App\Models\Group;
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
        Schema::create('group_user', function (Blueprint $table) {
            $table->foreignIdFor(Group::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamps();


            $table->unique([
                'group_id',
                'user_id'
            ], 'GU');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups_users');
    }
};
