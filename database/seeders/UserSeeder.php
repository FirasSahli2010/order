<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds for the table users.
     */
    public function run(): void
    {
        $userName = 'Jane '.Str::random(10);
        $user = \App\Models\User::factory()->create([

            'name'=>$userName,
            'email'=>'jane@example.org',
            'password'=>'Secret!'
            
        ]);

        $user->createToken($userName, ['*'], now()->addWeek());

        $userName2 = 'Jim '.Str::random(10);
        $user2 = \App\Models\User::factory()->create([

            'name'=>$userName2,
            'email'=>'jim@example.org',
            'password'=>'Secret!'
            
        ]);

        $user2->createToken($userName2, ['*'], now()->addWeek());

        $userName3 = 'Jhon '.Str::random(10);
        $user3 = \App\Models\User::factory()->create([

            'name'=>$userName3,
            'email'=>'john@example.org',
            'password'=>'Secret!'
            
        ]);

        $user3->createToken($userName3, ['*'], now()->addWeek());
    }
}
