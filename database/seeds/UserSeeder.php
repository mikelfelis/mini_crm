<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('users')->insert([
            'name' => Str::random(10),
            // 'email' => Str::random(10).'@admin.com',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]); */

        // changed that to this
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
