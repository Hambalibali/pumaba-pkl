<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(([
            'name'=>'Nawal',
            'username'=>'Hann45',
            'email'=>'wall@gmail.com',
            'password'=>Hash::make('123456')
        ]));
        
        // DB::table('users')->insert(([
        //     'name'=>'awang',
        //     'email'=>'w@gmail.com',
        //     'password'=>Hash::make('654321')
        // ]));
    }
}