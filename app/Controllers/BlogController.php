<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BlogController extends BaseController
{
	public function index()
	{
		return view('read-more');
	}

	public function posts()
	{
		return view('posts');
	}

	public function tag()
	{
		return view('posts-by-tag');
	}
}
