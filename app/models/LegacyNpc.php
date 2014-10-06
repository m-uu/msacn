<?php

class LegacyNpc extends Eloquent
{
	public $connection = 'legacy';
	protected $table = 'creature_template';
	public $primaryKey = 'entry';
}