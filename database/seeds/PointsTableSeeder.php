<?php

use Illuminate\Database\Seeder;

class PointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $param = [
      'user_id' => 1,
      'point' => 2,
      'created_at' => '2024-06-10 22:09',
      'updated_at' => '2024-06-10 22:09',
      ];
      DB::table('points')->insert($param);
    }
}
