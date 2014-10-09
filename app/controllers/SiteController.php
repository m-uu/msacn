<?php

class SiteController extends BaseController
{
	public function index()
	{
		if (Auth::check())
			return Redirect::to('/home');
		else
			return Redirect::to('/login');
	}

	public function login()
	{
		return View::make('login');
	}
}
