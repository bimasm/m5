<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post=factory(App\Post::class,3)->create();
        
        
    }
}
