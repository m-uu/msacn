<?php

class Article extends Eloquent
{
	protected $table = 'article';

	protected $fillable = ['title', 'content', 'creator'];

	public function creator()
	{
		return $this->hasOne('Player');
	}

	public function category()
	{
		return $this->hasOne('ArticleCategory');
	}
}