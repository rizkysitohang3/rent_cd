<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
            [
                'username' => 'aiglien', 
                'password' => 'aiglien123'
            ]
        );
        
        DB::table('users')->insert(
            [
                'username' => 'kylex', 
                'password' => 'kylex123'
            ]
        );
        
        
        
    }

}
