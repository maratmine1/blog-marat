<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=["post_id","user_name","body","likes"];
	public function post(){
		return $this->belongsTo("App\Post");
	}
}
