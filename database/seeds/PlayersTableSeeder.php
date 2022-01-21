<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
          	'name' => '生谷慶',
            'number' => 6,
            'team_id'=>1]);
    }
}
