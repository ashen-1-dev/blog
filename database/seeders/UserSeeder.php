<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at = Carbon::now()->toDateTimeString();

        DB::table('users')->insert([
            'first_name' => 'Nikita',
            'last_name' => 'Lepeykin',
            'login' => 'admin',
            'email' => 'alen2014@gmail.com',
            'password' => Hash::make('123123'),
            'birth_date' => '2001.01.14',
            'created_at' => $created_at,
            'updated_at' => $created_at
        ]);

    }
}
