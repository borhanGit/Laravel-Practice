<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       post::factory(10)->create();
    }
}
