<?php

class ArticleController extends BaseController
{
	public function view($id)
	{
		$article = Article::find($id);
		if ($article)
			return View::make('article.view')->withArticle($article)->withTitle($article->title);
	}

	public function fetch()
	{
		$article = Article::all();
		return Response::json($article);
	}

	public function fetch_page($category = 1, $page = 1, $limit = 15)
	{
		if ($limit < 5)
			$limit = 5;
		if ($limit > 50)
			$limit = 50;

		$max_count = Article::count();
		if ($page < 1)
			$page = 1;

		$max_page = ceil($max_count / $limit);

		if (($page - 1) * $limit >= $max_count)
		{
			# over the last page, just return the last page.
			$page = $max_page;
		}

		$pagi = array();
		for ($i = 1; $i <= $max_page; $i++)
		{
			$pagi[$i] = $i;
		}

		$articles = Article::select('id', 'title', 'creator', 'category', 'created_at', 'updated_at')
			->where('category', '=', $category)
			->skip($limit * ($page - 1))
			->take($limit)->orderBy('created_at', 'desc')
			->get();

		$result = array('data'=>$articles, 'category'=>$category, 'max_count'=>$max_count, 'total_page'=>ceil($max_count / $limit), 'current_page'=>$page, 'pagi'=>$pagi);
		return Response::json($result);
	}

	public function publish()
	{
		if (!Auth::check())
			return Response::json(array('success'=>false, 'msg'=>'You must login to do that.'), 200);

		$title = Input::get('title');
		$content = Input::get('content');
		$creator = Auth::user()->id;
		$category = Input::get('category');
		$article = new Article;
		$article->title = $title;
		$article->content = $content;
		$article->creator = $creator;
		$article->category = $category;
		$article->save();
		
		return Response::json(array('success'=>true, 'msg'=>'Successfullly created new article.'), 200);
	}

	public function get_categories()
	{
		$categories = ArticleCategory::all();
		return Response::json($categories);
	}

	public function fetch_single_article($id)
	{
		$article = Article::find($id);
		if ($article)
			return Response::json($article);
		return Response::json(array('title'=>'Article Not Exsit.'), 200);
	}
}
