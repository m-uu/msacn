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
		if (Auth::attempt(array('email'=>Input::json('email'), 'password'=>Input::json('password'))))
			return Response::json(array('auth_code'=>5));
		else
			return Response::json(array('auth_code'=>3));
	}

	public function logout()
	{
		Auth::logout();
		return Response::json(array('auth_code'=>4));
	}

	public function reg()
	{
		$player = new Player;
		$player->email = Input::get('email');
		$player->password = Hash::make(Input::get('password'));
		$player->nickname = Input::get('nickname');
		$player->save();
		return Redirect::to('/login')->with('reg_success', 'Reg Success!');
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
}

?>