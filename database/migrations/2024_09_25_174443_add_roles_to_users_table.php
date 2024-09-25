<?php

use App\Models\User;
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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->after('email')->nullable()->default(false);
            $table->boolean('is_revisor')->after('is_admin')->nullable()->default(false);
            $table->boolean('is_writer')->after('is_revisor')->nullable()->default(false);
        });


        User::create([
            'name' => 'Admin',
            'email' => 'admin@theaulapost.it',
            'password' => bcrypt('1234578'),
            'is_admin' => true
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            User::where('email', 'admin@theaulapost.it')->dalete();

            Schema::table('users', function(Blueprint $table){
                $table->dropColumn(['is_admin', 'is_revisor', 'is_writer']);
            });
        });
    }
};
