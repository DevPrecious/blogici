<?php

namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
	protected $table                = 'posts';
	protected $primaryKey           = 'post_id';
	protected $useSoftDeletes       = false;
	protected $allowedFields        = ['posted_by_id', 'title', 'slug', 'tag', 'content', 'cover_image'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';
}
