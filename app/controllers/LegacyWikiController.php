<?php

class LegacyWikiController extends BaseController
{
	public function act($param)
	{
		if ($param == 'create')
			return View::make('legacy.wiki.create')->withTitle('Create Wiki');

		$wiki = Wiki::find($param);
		return View::make('legacy.wiki.view')->withTitle($wiki->title)->withContent($wiki->content)->withIcon($wiki->icon);
	}

	public function store()
	{
		$wiki = new Wiki;
		$wiki->title = Input::get('Wiki_title');
		$wiki->content = Input::get('Wiki_content');
		$wiki->save();

		return Redirect::route('legacy_wiki_index');
	}

	public function index()
	{
		$wiki = Wiki::take(10)->get();
		return View::make('legacy.wiki.index')->withWikis($wiki)->withTitle(Legacy::locale('legacy_wiki'));
	}
}
