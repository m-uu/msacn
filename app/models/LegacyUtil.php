<?php

class LegacyUtil extends Eloquent {

	public static function get_item_quality_color($quality) {

		$color_code = '#000000';

		switch ($quality) {
			case 0:
				$color_code = '#9d9d9d';
				break;
			case 2:
				$color_code = '#1eff00';
				break;
			case 3:
				$color_code = '#0070dd';
				break;
			case 4:
				$color_code = '#a335ee';
				break;
			case 5:
				$color_code = '#ff8000';
				break;
			case 6:
				$color_code = '#e6cc80';
				break;
			case 7:
				$color_code = '#e6cc80';
			default:
				break;
		}

		return $color_code;

	}

	public static function spell_trigger_name($index)
    {
        switch ($index) {
            case 0:
                return Legacy::locale('on_use');
            case 1:
                return Legacy::locale('on_equip');
            case 2:
                return Legacy::locale('chance_on_hit');
            default:
                return Legacy::locale('unknown_spell_trigger');
        }
    }

    public static function socket_color($color)
    {
    	switch ($color) {
    		case 1:
    			return Legacy::locale('socket_meta');
    		case 2:
    			return Legacy::locale('socket_red');
    		case 4:
    			return Legacy::locale('socket_yellow');
    		case 8:
    			return Legacy::locale('socket_blue');
    		default:
    			return Legacy::locale('socket_unknown');
    	}
    }

    public static function category_info($class, $subclass)
    {
    	switch ($class)
    	{
		case 0:
			switch ($subclass)
			{
				case 0:
					return Legacy::locale('consumable');
				case 1:
					return Legacy::locale('potion');
				case 2:
					return Legacy::locale('elixir');
				case 3:
					return Legacy::locale('flask');
				case 4:
					return Legacy::locale('scroll');
				case 5:
					return Legacy::locale('food');
				case 6:
					return Legacy::locale('item_enhancement');
				case 7:
					return Legacy::locale('bandage');
				default:
					return Legacy::locale('consumable_misc');
			}
		case 1:
			switch ($subclass) {
				case 0:
					return Legacy::locale('bag');
				case 1:
					return Legacy::locale('soul_container');
				case 2:
					return Legacy::locale('herb_container');
				case 3:
					return Legacy::locale('enchanting_container');
				case 4:
					return Legacy::locale('engineering_container');
				case 5:
					return Legacy::locale('gem_container');
				case 6:
					return Legacy::locale('mining_container');
				case 7:
					return Legacy::locale('leatherworking_container');
				case 8:
					return Legacy::locale('inscription_container');
				default:
					return Legacy::locale('container');
			}
		case 2:
    		switch($subclass)
            {
	            case 0:
	                return Legacy::locale('1h_axe');
	            case 1:
	                return Legacy::locale('2h_axe');
	            case 2:
	                return Legacy::locale('bow');
	            case 3:
	                return Legacy::locale('gun');
	            case 4:
	                return Legacy::locale('1h_mace');
	            case 5:
	                return Legacy::locale('2h_mace');
	            case 6:
	                return Legacy::locale('polearm');
	            case 7:
	                return Legacy::locale('1h_sword');
	            case 8:
	                return Legacy::locale('2h_sword');
	            case 10:
	                return Legacy::locale('Staff');
	            case 13:
	                return Legacy::locale('fist_weapon');
	            case 15:
	                return Legacy::locale('dagger');
	            case 16:
	                return Legacy::locale('throwable');
	            case 17:
	                return Legacy::locale('spear');
	            case 18:
	                return Legacy::locale('crossbow');
	            case 19:
	                return Legacy::locale('fishing_pole');
	            default:
	                return Legacy::locale('weapon');
            }
        case 3:
        	switch ($subclass)
        	{
        		case 0:
        			return Legacy::locale('gem_red');
        		case 1:
        			return Legacy::locale('gem_blue');
        		case 2:
        			return Legacy::locale('gem_yellow');
        		case 3:
        			return Legacy::locale('gem_purple');
        		case 4:
        			return Legacy::locale('gem_green');
        		case 5:
        			return Legacy::locale('gem_orange');
        		case 6:
        			return Legacy::locale('gem_meta');
        		case 7:
        			return Legacy::locale('gem_simple');
        		case 8:
        			return Legacy::locale('gem_prismatic');
        		default:
        			return Legacy::locale('gem');
        	}
        case 4:
        	switch ($subclass)
        	{
        		case 0:
        			return Legacy::locale('armor_trinket');
        		case 1:
        			return Legacy::locale('armor_cloth');
        		case 2:
        			return Legacy::locale('armor_leather');
        		case 3:
        			return Legacy::locale('armor_mail');
        		case 4:
        			return Legacy::locale('armor_plate');
        		case 5:
        			return Legacy::locale('armor_buckler');
        		case 6:
        			return Legacy::locale('armor_shield');
        		case 7:
        			return Legacy::locale('armor_libram');
        		case 8:
        			return Legacy::locale('armor_idol');
        		case 9:
        			return Legacy::locale('armor_totem');
        		case 10:
        			return Legacy::locale('armor_sigil');
        		default:
        			return Legacy::locale('armor');
        	}
        case 5:
        	switch ($subclass)
        	{
        		case 0:
        		default:
        			return Legacy::locale('reagent');
        	}
        case 6:
        	switch ($subclass)
        	{
        		case 0:
        			return Legacy::locale('projectile_wand');
        		case 1:
        			return Legacy::locale('projectile_bolt');
        		case 2:
        			return Legacy::locale('projectile_arrow');
        		case 3:
        			return Legacy::locale('projectile_bullet');
        		case 4:
        			return Legacy::locale('projectile_thrown');
        		default:
        			return Legacy::locale('projectile');
        	}
        case 7:
        	switch ($subclass)
        	{
        		case 0:
        			return Legacy::locale('trade_goods');
        		case 1:
        			return Legacy::locale('parts');
        		case 2:
        			return Legacy::locale('explosives');
        		case 3:
        			return Legacy::locale('devices');
        		case 4:
        			return Legacy::locale('jewelcrafting');
        		case 5:
        			return Legacy::locale('cloth');
        		case 6:
        			return Legacy::locale('leather');
        		case 7:
        			return Legacy::locale('mineral');
        		case 8:
        			return Legacy::locale('meat');
        		case 9:
        			return Legacy::locale('herb');
        		case 10:
        			return Legacy::locale('elemental');
        		case 11:
        			return Legacy::locale('trade_goods_other');
        		case 12:
        			return Legacy::locale('enchanting');
        		case 13:
        			return Legacy::locale('material');
        		case 14:
        			return Legacy::locale('armor_enchantment');
        		case 15:
        			return Legacy::locale('weapon_enchantment');
        		default:
        			return Legacy::locale('trade_goods_misc');
        	}
        case 8:
        	switch ($subclass)
        	{
        		case 0:
        			return Legacy::locale('training_book_generic');
        		case 1:
        			return Legacy::locale('training_book_warrior');
        		case 2:
        			return Legacy::locale('training_book_paladin');
        		case 3:
        			return Legacy::locale('training_book_hunter');
        		case 4:
        			return Legacy::locale('training_book_rogue');
        		case 5:
        			return Legacy::locale('training_book_priest');
        		case 6:
        			return Legacy::locale('training_book_dk');
        		case 7:
        			return Legacy::locale('training_book_shaman');
        		case 8:
        			return Legacy::locale('training_book_mage');
        		case 9:
        			return Legacy::locale('training_book_warlock');
        		case 11:
        			return Legacy::locale('training_book_druid');
        		default:
        			return Legacy::locale('training_book');
        	}
        case 9:
        	switch ($subclass)
        	{
        		case 0:
        			return Legacy::locale('recipe_book');
        		case 1:
        			return Legacy::locale('recipe_leatherworking');
        		case 2:
        			return Legacy::locale('recipe_tailoring');
        		case 3:
        			return Legacy::locale('recipe_engineering');
        		case 4:
        			return Legacy::locale('recipe_blacksmithing');
        		case 5:
        			return Legacy::locale('recipe_cooking');
        		case 6:
        			return Legacy::locale('recipe_alchemy');
        		case 7:
        			return Legacy::locale('recipe_first_aid');
        		case 8:
        			return Legacy::locale('recipe_enchanting');
        		case 9:
        			return Legacy::locale('recipe_fishing');
        		case 10:
        			return Legacy::locale('jewelcrafting');
        		default:
        			return Legacy::locale('recipe');
        	}
        case 10:
        	switch ($subclass)
        	{
        		case 0:
        		default:
        			return Legacy::locale('money');
        	}
        case 11:
        	switch ($subclass)
        	{
        		case 0:
        			return Legacy::locale('quiver_1');
        		case 1:
        			return Legacy::locale('quiver_2');
        		case 2:
        			return Legacy::locale('quiver_3');
        		case 3:
        			return Legacy::locale('ammo_pouch');
        		default:
        			return Legacy::locale('quiver');
        	}
        case 12:
        	switch ($subclass)
        	{
        		case 0:
        		default:
        			return Legacy::locale('quest_item');
        	}
        case 13:
        	switch ($subclass)
        	{
        		case 0:
        			return Legacy::locale('key');
        		case 1:
        			return Legacy::locale('lockpick');
        		default:
        			return Legacy::locale('key');
        	}
        case 14:
        	switch ($subclass)
        	{
        		case 0:
        		default:
        			return Legacy::locale('permanent_item');
        	}
        case 15:
        	switch ($subclass)
        	{
        		case 0:
        			return Legacy::locale('junk');
        		case 1:
        			return Legacy::locale('junk_reagent');
        		case 2:
        			return Legacy::locale('junk_pet');
        		case 3:
        			return Legacy::locale('junk_holiday');
        		case 4:
        			return Legacy::locale('junk_other');
        		case 5:
        			return Legacy::locale('junk_mount');
        		default:
        			return Legacy::locale('junk');
        	}
        case 16:
        	switch ($subclass)
        	{
        		case 1:
        			return Legacy::locale('glyph_warrior');
        		case 2:
        			return Legacy::locale('glyph_paladin');
        		case 3:
        			return Legacy::locale('glyph_hunter');
        		case 4:
        			return Legacy::locale('glyph_rogue');
        		case 5:
        			return Legacy::locale('glyph_priest');
        		case 6:
        			return Legacy::locale('glyph_dk');
        		case 7:
        			return Legacy::locale('glyph_shaman');
        		case 8:
        			return Legacy::locale('glyph_mage');
        		case 9:
        			return Legacy::locale('glyph_warlock');
        		case 11:
        			return Legacy::locale('glyph_druid');
        		default:
        			return Legacy::locale('glyph');
        	}
        default:
        	return Legacy::locale('unknown_item_type');
        }
    }

    public static function dmg_school($index)
    {
        return Legacy::locale('dmg'.$index);
    }

    public static function stat_name($index)
    {
        switch ($index) {
            case 0:
                return Legacy::locale('power');
            case 1:
                return Legacy::locale('health');
            case 3:
                return Legacy::locale('agility');
            case 4:
                return Legacy::locale('strength');
            case 5:
                return Legacy::locale('intellect');
            case 6:
                return Legacy::locale('spirit');
            case 7:
                return Legacy::locale('stamina');
            default:
                return Legacy::locale('unknown_stat');
        }
    }

    public static function class_name($class)
    {
        switch ($class)
        {
        case 1:
            return Legacy::locale('container');
        case 2:
            return Legacy::locale('weapon');
        case 3:
            return Legacy::locale('gem');
        case 4:
            return Legacy::locale('armor');
        default:
            return Legacy::locale('unknown_item_class');
        }
    }

    public static function inventory_name()
	{
        switch ($this->inventory_type)
	    {
            case 1:
	            return Legacy::locale('head_gear');
            case 2:
                return Legacy::locale('necklace');
            case 3:
                return Legacy::locale('shoulder_gear');
            default:
                return Legacy::locale('unknown_inventory_slot');
        }
	}
}