<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'uuid' => Str::uuid(),
            'name' => 'Admin Marrene Official',
            'email' => 'admin@marrene.id',
            'password' => Hash::make('admin'),
            'role'=> 'Admin'
        ]);
    }
}
