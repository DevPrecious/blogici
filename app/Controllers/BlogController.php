<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Comment;
use App\Models\Post;

class BlogController extends BaseController
{

	public function index($slug = null)
	{
		helper('text');
		$data = [];
		$postmodel = new Post();
		$commentmodel = new Comment();
		$post = $postmodel->where('slug', $slug)->first();
		if(empty($post)){
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the post: '. $slug);
		}
		$related = $postmodel->where('tag', $post['tag'])->findAll(3);
		$comments = $commentmodel->where('post_id', $post['post_id'])->orderBy('comment_id', 'DESC')->findAll();
		$data = [
			'post' => $post,
			'related' => $related,
			'comments' => $comments
		];
		//comment
		if($this->request->getMethod() == 'post')
		{
			$rules = [
				'name' => [
					'rules' => 'required',
					'label' => 'Full name'
				],
				'comment' => [
					'rules' => 'required',
					'label' => 'Comment'
				],
			];

			if(!$this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{
				$model = new Comment();
				$com = [
					'post_id' => $this->request->getVar('post_id'),
					'name' => $this->request->getVar('name'),
					'comment' => $this->request->getVar('comment'),
				];
				$model->save($com);
				session()->setFlashdata('success', 'Comment posted');
				return redirect()->back();
			}
		}
		return view('read-more', $data);
	}

	public function posts()
	{
		helper('text');

		$data = [];
		$postmodel = new Post();
		$data = [
			'posts' => $postmodel->paginate(9),
			'pager' => $postmodel->pager
		];


		return view('posts', $data);
	}

	public function tag($tag = null)
	{
		helper('text');
		$data = [];
		$postmodel = new Post();
		$posts = $postmodel->where('tag', $tag);
		if(empty($posts)){
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the posts with tag: '. $tag);
		}

		$data = [
			'posts' => $posts->paginate(9),
			'pager' => $postmodel->pager,
			'tag' => $tag
		];
		return view('posts-by-tag', $data);
	}

	public function search()
	{
		helper('text');
		$data = [];

		if($this->request->getMethod() == 'post')
		{
			$query = $this->request->getVar('query');
			
			$postmodel = new Post();
			$search_query = $postmodel->like('title', $query)->findAll();
			// dd($search_query);
			$data = [
				'posts' => $search_query,
			];
		}

		return view('search', $data);
	}

}
