<?php
use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
    	

    	$category =new Category;
    	$category->name = "HTML5";
    	$category->save();

    	$category =new Category;
    	$category->name = "laravel";
    	$category->save();

        $post = new Post;
        $post->title = "Mi primer post";
        $post->excerpt = "Mi primer excerpt";
        $post->body = "Mi primer body";
        $post->published_at = Carbon::now();
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Mi segundo post";
        $post->excerpt = "Mi segundo excerpt";
        $post->body = "Mi segundo body";
        $post->published_at = Carbon::now();
        $post->category_id = 2;
        $post->save();

    }
}
