<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User; 

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'is_admin' => '1',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'jared_euler',
                'email' => 'jared_euler@eulersoftcorp.com',
                'is_admin' => '0',
                'password' => Hash::make('password'),
            ]
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
