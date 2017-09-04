<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
'name'=>'Wan Muzaffar',
'username'=>'wanmuz',
'email'=>'wanmuz86@gmail.com',
'password'=>bcrypt('abcd1234'),
'remember_token'=>str_random(10),
'group_id'=>1,
'active'=>1
        	]);
    }
}
