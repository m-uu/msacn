<?php

class LegacyCreatureLoot extends Eloquent
{
	public $connection = 'legacy';
	protected $table = 'creature_loot_template';
}