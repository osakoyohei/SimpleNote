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
                'name' => 'tag1',
                'user_id' => 1,
            ],
            [
                'name' => 'tag2',
                'user_id' => 1,
            ],
            [
                'name' => 'tag3',
                'user_id' => 1,
            ],
        ]);
    }
}
