<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at = Carbon::now()->toDateTimeString();

        DB::table('roles_users')->insert([
            'user_id' => '1',
            'role_id' => '1',
            'created_at' => $created_at,
            'updated_at' => $created_at
        ]);
    }
}
