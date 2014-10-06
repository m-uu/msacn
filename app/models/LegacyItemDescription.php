<?php

class LegacyItemDescription extends Eloquent
{
	protected $table = 'legacy_item_description';

	public function creator()
	{
		return $this->hasOne('Player', 'id', 'creator');
	}
}