<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memos')->insert([
            [
                'content' => 'メモ１',
                'user_id' => 1,
                'tag_id' => 1,
                'status' => 1,
            ],
            [
                'content' => 'メモ２',
                'user_id' => 1,
                'tag_id' => 1,
                'status' => 1,
            ],
            [
                'content' => 'メモ３',
                'user_id' => 1,
                'tag_id' => 2,
                'status' => 1,
            ],
            [
                'content' => 'メモ４',
                'user_id' => 1,
                'tag_id' => 3,
                'status' => 1,
            ],
            [
                'content' => 'メモ５',
                'user_id' => 1,
                'tag_id' => 3,
                'status' => 1,
            ],
            [
                'content' => 'メモ６',
                'user_id' => 1,
                'tag_id' => 3,
                'status' => 1,
            ],
        ]);
    }
}
