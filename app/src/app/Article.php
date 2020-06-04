<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	// protected $fillable = ['title', 'excerpt', 'body'];
	protected $guarded = []; // as long as you're safe and don't pass everything from request!

	public function path()
	{
		return route('articles.show', $this);
	}
}
