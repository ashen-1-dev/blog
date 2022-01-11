<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
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

        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1',
            'created_at' => $created_at,
            'updated_at' => $created_at
        ]);

        // Giving role 'user' for all seeded users
        $role = Role::where('name', '=', 'user')
            ->get()
            ->first();
        $users = User::all();
        foreach ($users as $user) {
            $user->assignRole($role);
        }
    }
}
