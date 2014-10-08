<?php

class SiteController extends BaseController
{
	public function index()
	{
		return View::make('index');
	}

	public function login()
	{
		return View::make('login');
	}
}
