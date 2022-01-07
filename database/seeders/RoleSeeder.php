<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at = Carbon::now()->toDateTimeString();

        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'polniy dostup',
            'created_at' => $created_at,
            'updated_at' => $created_at
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
            'created_at' => $created_at,
            'updated_at' => $created_at
        ]);
    }
}
