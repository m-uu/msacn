<?php

class PlayerController extends BaseController {

	public function view($id)
	{
		$player = Player::find($id);
		if ($player)
			return View::make('player.view')->with('player', $player)->withTitle($player->nickname.' - Player Tab Page');
	}

	public function index()
	{
		return View::make('player.index')->withTitle('Player Index Tabl');
	}

	public function login()
	{
		$remember = Input::get('remember') == 'on' ? true : false;
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')), $remember))
			return Redirect::to('/home');
		else
			return Redirect::to('/login');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/login');
	}

	public function register()
	{
		$player = new Player;
		$player->email = Input::get('email');
		$player->password = Hash::make(Input::get('password'));
		$player->nickname = Input::get('nickname');
		$player->save();
		Auth::login($player);
		return Redirect::to('/home');
	}

	public function bind()
	{
		$password = Input::get('password');
		$email = Input::get('email');
		if ($account = LegacyAccount::where('email', '=', $email)->get())
		{
			if ($account->sha_pass_hash == SHA1($account->username.':'.$password))
			{
				# send player a change email form.
			}
		}
	}

	public function check_login()
	{
		if (Auth::check())
			return Response::json(array('auth_code'=>1));
		return Response::json(array('auth_code'=>2));
	}

	public function validateEmail()
	{
		$fieldid = Input::get('fieldId');
		$email = Input::get('fieldValue');
		if (Player::where('email', '=', $email)->count() != 0)
			return Response::json(array($fieldid, false, '这个邮箱地址已经被用掉了。'), 200);
		return Response::json(array($fieldid, true, '恭喜！这个邮箱还可以注册！'), 200);
	}
}
