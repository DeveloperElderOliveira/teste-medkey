<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       $user =  \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt(123456)
        ]);

        $department = \App\Models\Department::create([
            'type' => 'ABC',
            'description' => 'ABC-DEF',
        ]);

        $professional = \App\Models\Professional::create([
            'expertise' => 'ABC',
            'department_id' => $department->id,
            'user_id' => $user->id,
            
        ]);

        $patient = \App\Models\Patient::create([
            'name' => 'New user patient',
            'disease' => 'ABC',
            'description' => 'Variant ABC'
        ]);
    }
}
