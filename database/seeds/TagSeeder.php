<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'id' => '1',
                'name' => 'tag1',
                'user_id' => 1,
            ],
            [
                'id' => '2',
                'name' => 'tag2',
                'user_id' => 1,
            ],
            [
                'id' => '3',
                'name' => 'tag3',
                'user_id' => 1,
            ],
        ]);
    }
}
