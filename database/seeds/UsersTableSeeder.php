<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          	'name' => 'keiikitani',
            'email' => 'iki.kei.2001@outlook.jp',
            'password' => 'ikikei2001',
            'team_id'=>1]);
    }
}
