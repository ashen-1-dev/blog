<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at = Carbon::now()->toDateTimeString();

        DB::table('categories')->insert([
            'id' => 1,
            'title' => 'Без категории',
            'parent_id' => 0,
            'created_at' => $created_at,
            'updated_at' => $created_at
        ]);

        for ($i = 2; $i < 11; $i++) {
            DB::table('categories')->insert([
                'title' => "Категория $i",
                'parent_id' => $i < 4 ? 0 : rand(0,3),
                'created_at' => $created_at,
                'updated_at' => $created_at
            ]);
        }

    }
}
