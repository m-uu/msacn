<?php

class LegacyAccount extends Eloquent
{
	public $connection = 'game_auth';
	protected $table = 'account';
}