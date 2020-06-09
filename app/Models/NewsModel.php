<?php namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'usr_menu';

	public function getNews($slug = false)
	{
	    if ($slug === false)
	    {
	        return $this->findAll();
	    }

	    return $this->asArray()
	                ->where(['PARENT_ID' => $slug])
	                ->first();
	}


}