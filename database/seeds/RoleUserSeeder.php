<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol_users')->insert([
            [
                'name' => 'Creatore',
                'slug' => md5(time().Str::random(60)),
                'email'=>"dev@titan.com",
                'nickname'=>md5(time().Str::random(10)),
                'password'=>Hash::make(123456789),
                'status' => 1,
                'rol_id'=>1
            ],
            [
                'name' => 'Zeus',
                'slug' => md5(time().Str::random(60)),
                'email'=>"dev@titan.com",
                'nickname'=>md5(time().Str::random(10)),
                'password'=>Hash::make(123456789),
                'status' => 1,
                'rol_id'=>1
            ]
        ]);
    }
}
