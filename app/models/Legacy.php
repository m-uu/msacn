<?php

class Legacy extends Eloquent
{
	public static function locale($key)
	{
		return Lang::get('legacy.'.$key);
	}
}