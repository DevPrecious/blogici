<?php

namespace App\Models;

use CodeIgniter\Model;

class Comment extends Model
{
	protected $table                = 'comments';
	protected $primaryKey           = 'id';
	protected $useSoftDeletes       = false;
	protected $allowedFields        = ['post_id', 'name', 'comment'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

}
