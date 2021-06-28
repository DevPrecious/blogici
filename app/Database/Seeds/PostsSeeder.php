<?php

namespace App\Database\Seeds;

use App\Models\Post;
use CodeIgniter\Database\Seeder;

class PostsSeeder extends Seeder
{
	public function run()
	{
		for($i = 0; $i <= 50; $i++){
		$data = [
			'posted_by_id' => 1,
			'title' => static::faker()->text(20),
			'slug' => url_title(static::faker()->text(20), '-', TRUE),
			'tag' => static::faker()->text(5),
			'content' => static::faker()->text(1500) ,
			'cover_image' => '',
		];

		$posts = new Post();
			$posts->save($data);
		}
	}
}
