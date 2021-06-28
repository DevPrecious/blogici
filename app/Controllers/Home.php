<?php

namespace App\Controllers;

use App\Models\Post;

class Home extends BaseController
{
	public function index()
	{
		helper(['text']);
		$data = [];

		$post_model = new Post();
		$latest_post = $post_model->orderBy('created_at', 'DESC')->first();
		$first_three = $post_model->orderBy('created_at', 'DESC')->findAll(3);

		$data = [
			'latest_post' => $latest_post,
			'first_three' => $first_three,
		];
		return view('index', $data);
	}
}
