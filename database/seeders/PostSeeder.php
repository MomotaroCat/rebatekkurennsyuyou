<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use DateTime;
>>>>>>> origin/master

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'title' => '命名の心得',
                'body' => '命名はデータを基準に考える',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
<<<<<<< HEAD
=======
        //
>>>>>>> origin/master
    }
}
