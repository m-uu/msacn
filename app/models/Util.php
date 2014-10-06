<?php

class Util extends Eloquent
{
	public static function tl($key)
	{
		return Lang::get('legacy.'.$key);
	}

	public static function ts($key)
	{
		return Lang::get('site.'.$key);
	}
}