<?php

class LegacyItemController extends BaseController
{
	public function view($entry)
	{
		$item = LegacyItem::find($entry);
		if ($item)
			return View::make('legacy.item.view')->with('item', $item)->withTitle($item->name.' - Legacy Item Page');
	}

	public function desc($entry)
	{
		$item = LegacyItem::find($entry);
		if ($item)
		{
			$desc = $item->find($entry)->desc;
			if ($desc->description)
				return View::make('legacy.item.desc')->with('desc', $desc)->with('item', $item)->withTitle($item->name.' - Detailed Description');
		}
	}
}
