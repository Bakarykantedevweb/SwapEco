<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('eco_contributeurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('domaineExpertise')->nullable();
            $table->json('reseauxSociaux')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('eco_contributeurs')->insert([
            [
                'name' => 'Contributeur',
                'email' => 'contributeur@gmail.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_contributeurs');
    }
};
