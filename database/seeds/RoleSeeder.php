<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        [
            'name' => 'Super Administrator',
            'slug' => md5(time().Str::random(60)),
            'status' => 1,
            'user_id' => 1
        ],
        [
            'name' => 'Administrator',
            'slug' => md5(time().Str::random(60)),
            'status' => 1,
            'user_id' => 1
        ]
        ]);
    }
}
