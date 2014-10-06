<?php

class LegacyItem extends Eloquent {

    public $connection = 'legacy';
	public $primaryKey = 'entry';
	public $timestamps = 'false';
    
	protected $table = 'item_template';

	public function quality_color()
	{
        return LegacyUtil::get_item_quality_color($this->Quality);
	}

    public function damage_info()
    {
        if ($this->class != 2)
            return;

        $damage_info = '<p>';
        if ($this->dmg_min1 != 0 && $this->dmg_max1 != 0)
        {
            $damage_info = LegacyUtil::dmg_school($this->dmg_type1).' +'.$this->dmg_min1.' ~ '.$this->dmg_max1;
            if ($this->dmg_min2 != 0 && $this->dmg_max2 != 0)
                $damage_info.='<br/>'.LegacyUtil::dmg_school($this->dmg_type2).' +'.$this->dmg_min2.' ~ '.$this->dmg_max2;
        }
        $damage_info.='<br/>'.Legacy::locale('weapon_speed').' '.($this->delay/1000);
        return $damage_info.'</p>';
    }

    public function stat_info()
    {
        $stat_info = '';
        if ($this->stat_type1 != 0 && $this->stat_value1 != 0)
            $stat_info .= '+'.$this->stat_value1.' '.LegacyUtil::stat_name($this->stat_type1).'<br/>';
        if ($this->stat_type2 != 0 && $this->stat_value2 != 0)
            $stat_info .= '+'.$this->stat_value2.' '.LegacyUtil::stat_name($this->stat_type2).'<br/>';
        if ($this->stat_type3 != 0 && $this->stat_value3 != 0)
            $stat_info .= '+'.$this->stat_value3.' '.LegacyUtil::stat_name($this->stat_type3).'<br/>';
        if ($this->stat_type4 != 0 && $this->stat_value4 != 0)
            $stat_info .= '+'.$this->stat_value4.' '.LegacyUtil::stat_name($this->stat_type4).'<br/>';
        if ($this->stat_type5 != 0 && $this->stat_value5 != 0)
            $stat_info .= '+'.$this->stat_value5.' '.LegacyUtil::stat_name($this->stat_type5).'<br/>';
        if ($this->stat_type6 != 0 && $this->stat_value6 != 0)
            $stat_info .= '+'.$this->stat_value6.' '.LegacyUtil::stat_name($this->stat_type6).'<br/>';
        if ($this->stat_type7 != 0 && $this->stat_value7 != 0)
            $stat_info .= '+'.$this->stat_value7.' '.LegacyUtil::stat_name($this->stat_type7).'<br/>';
        if ($this->stat_type8 != 0 && $this->stat_value8 != 0)
            $stat_info .= '+'.$this->stat_value8.' '.LegacyUtil::stat_name($this->stat_type8).'<br/>';
        if ($this->stat_type9 != 0 && $this->stat_value9 != 0)
            $stat_info .= '+'.$this->stat_value9.' '.LegacyUtil::stat_name($this->stat_type9).'<br/>';
        if ($this->stat_type10 != 0 && $this->stat_value10 != 0)
            $stat_info .= '+'.$this->stat_value10.' '.LegacyUtil::stat_name($this->stat_type10);
        
        if ($stat_info != '')
        {
            $stat_info = preg_replace("/<br\/>\$/", "", $stat_info);
            $stat_info = '<p>'.$stat_info.'</p>';
            return $stat_info;
        }
    }

    public function res_info()
    {
        $res_info = '';
        if ($this->fire_res)
            $res_info.='+'.$this->fire_res.' '.Legacy::locale('fire_res').'<br/>';
        if ($this->nature_res)
            $res_info.='+'.$this->nature_res.' '.Legacy::locale('nature_res').'<br/>';
        if ($this->frost_res)
            $res_info.='+'.$this->frost_res.' '.Legacy::locale('frost_res').'<br/>';
        if ($this->shadow_res)
            $res_info.='+'.$this->shadow_res.' '.Legacy::locale('shadow_res').'<br/>';
        if ($this->arcane_res)
            $res_info.='+'.$this->arcane_res.' '.Legacy::locale('arcane_res');
        if ($res_info != '')
        {
            $res_info = preg_replace("/<br\/>\$/", "", $res_info);
            $res_info = '<p>'.$res_info.'</p>';
            return $res_info;
        }
    }

    public function socket_info()
    {
        $socket_info = '';
        if ($this->socketColor_1 != 0)
            $socket_info.=LegacyUtil::socket_color($this->socketColor_1).'<br/>';
        if ($this->socketColor_2 != 0)
            $socket_info.=LegacyUtil::socket_color($this->socketColor_2).'<br/>';
        if ($this->socketColor_3 != 0)
            $socket_info.=LegacyUtil::socket_color($this->socketColor_3);
        if ($socket_info != '')
        {
            $socket_info = preg_replace("/<br\/>\$/", "", $socket_info);
            $socket_info = '<p>'.$socket_info.'</p>';
            return $socket_info;
        }
    }

    public function spell_info()
    {
        $spell_info = '';
        if ($this->spellid_1 != 0)
        {
            $spell = LegacySpell::find($this->spellid_1);
            if ($spell)
                $spell_info.=LegacyUtil::spell_trigger_name($this->spelltrigger_1).': '.$spell->formatted_description().'<br/>';
        }
        if ($this->spellid_2 != 0)
        {
            $spell = LegacySpell::find($this->spellid_2);
            if ($spell)
                $spell_info.=LegacyUtil::spell_trigger_name($this->spelltrigger_2).': '.$spell->formatted_description().'<br/>';
        }
        if ($this->spellid_3 != 0)
        {
            $spell = LegacySpell::find($this->spellid_3);
            if ($spell)
                $spell_info.=LegacyUtil::spell_trigger_name($this->spelltrigger_3).': '.$spell->formatted_description().'<br/>';
        }
        if ($this->spellid_4 != 0)
        {
            $spell = LegacySpell::find($this->spellid_4);
            if ($spell)
                $spell_info.=LegacyUtil::spell_trigger_name($this->spelltrigger_4).': '.$spell->formatted_description().'<br/>';
        }
        if ($this->spellid_5 != 0)
        {
            $spell = LegacySpell::find($this->spellid_5);
            if ($spell)
                $spell_info.=LegacyUtil::spell_trigger_name($this->spelltrigger_5).': '.$spell->formatted_description();
        }
        if ($spell_info != '')
        {
            $spell_info = preg_replace("/<br\/>\$/", "", $spell_info);
            $spell_info = '<p>'.$spell_info.'</p>';
            return $spell_info;
        }
    }

    public function get_icon_name()
    {
        if ($this->displayid != 0)
            return LegacyItemDisplayInfo::find($this->displayid)->Icon1;
    }

    public function armor_block_info()
    {
        $info = '';
        if ($this->armor != 0)
            $info.='+'.$this->armor.' '.Legacy::locale('armor').'<br/>';
        if ($this->block != 0)
            $info.='+'.$this->block.' '.Legacy::locale('block');
        if ($info != '')
        {
            $info = preg_replace("/<br\/>\$/", "", $info);
            $info = '<p>'.$info.'</p>';
            return $info;
        }
    }

    public function player_desc()
    {
        return $this->hasOne('LegacyItemDescription', 'item_id', 'entry');
    }

    public function get_vendor_info()
    {
        $vendor_info = LegacyNpcVendor::where('item', '=', $this->entry)->get();
        if ($vendor_info->count() != 0)
        {
            $output_info=Legacy::locale('these_npc_is_selling_this_item').'：<br/><ul>';
            foreach ($vendor_info as $info) {
                $output_info.='<li>'.LegacyNpc::find($info->entry)->name.'</li>';
            }
            $output_info.='</ul>';
            return $output_info;
        }
    }

    public function get_creature_loot_info()
    {
        $loot_infos = LegacyCreatureLoot::where('Item', '=', $this->entry)->get();
        if ($loot_infos->count() != 0)
        {
            $output_info=Legacy::locale('can_loot_this_item_from_these_npc').'：<br/><ul>';
            foreach ($loot_infos as $loot_info)
            {
                if ($loot_info->Reference != 0)
                {
                    $referenced = LegacyReferenceLoot::where('Entry', '=', $loot_info->Reference)->get();
                    foreach ($referenced as $ref)
                    {
                        if ($ref->Item == $this->entry)
                        {
                            $output_info.='<li>'.LegacyNpc::find($loot_info->Entry)->name.'</li>';
                            break;
                        }
                    }
                }
                else
                {
                    $output_info.='<li>'.LegacyNpc::find($loot_info->Entry)->name.'</li>';
                }
            }
            return $output_info.'</ul>';
        }
    }

    public function get_production_info()
    {
        $produce_info = LegacySpell::where('EffectItemType1', '=', $this->entry)->get();
        if ($produce_info->count() != 0)
        {
            $output_info=Legacy::locale('can_make_from_these_recipe').'：<br/><ul>';
            foreach ($produce_info as $info)
            {
                $output_info.='<li>';
                if ($info->Reagent1 != 0)
                    $output_info.=link_to_route('legacy_item_view', LegacyItem::find($info->Reagent1)->name, $info->Reagent1).'*'.$info->ReagentCount1.' + ';
                if ($info->Reagent2 != 0)
                    $output_info.=link_to_route('legacy_item_view', LegacyItem::find($info->Reagent2)->name, $info->Reagent2).'*'.$info->ReagentCount2.' + ';
                if ($info->Reagent3 != 0)
                    $output_info.=link_to_route('legacy_item_view', LegacyItem::find($info->Reagent3)->name, $info->Reagent3).'*'.$info->ReagentCount3.' + ';
                if ($info->Reagent4 != 0)
                    $output_info.=link_to_route('legacy_item_view', LegacyItem::find($info->Reagent4)->name, $info->Reagent4).'*'.$info->ReagentCount4.' + ';
                if ($info->Reagent5 != 0)
                    $output_info.=link_to_route('legacy_item_view', LegacyItem::find($info->Reagent5)->name, $info->Reagent5).'*'.$info->ReagentCount5.' + ';
                if ($info->Reagent6 != 0)
                    $output_info.=link_to_route('legacy_item_view', LegacyItem::find($info->Reagent6)->name, $info->Reagent6).'*'.$info->ReagentCount6.' + ';
                if ($info->Reagent7 != 0)
                    $output_info.=link_to_route('legacy_item_view', LegacyItem::find($info->Reagent7)->name, $info->Reagent7).'*'.$info->ReagentCount7.' + ';
                if ($info->Reagent8 != 0)
                    $output_info.=link_to_route('legacy_item_view', LegacyItem::find($info->Reagent8)->name, $info->Reagent8).'*'.$info->ReagentCount8;
                $output_info = preg_replace("/\\s\\+\\s\$/", "", $output_info);
                $output_info.='</li>';
            }
            $output_info.='</ul>';
            return $output_info;
        }
    }

    public function has_loot()
    {
        if (LegacyNpcVendor::where('item', '=', $this->entry)->count() != 0)
            return true;
        if (LegacyCreatureLoot::where('Item', '=', $this->entry)->count() != 0)
            return true;
        if (LegacySpell::where('EffectItemType1', '=', $this->entry)->count() != 0)
            return true;
        return false;
    }

    public function has_stat_info()
    {
        return $this->StatsCount != 0 || $this->min_dmg1 != 0 || $this->min_dmg2 != 0 || $this->armor != 0 || $this->block != 0 
            || $this->socketColor_1 != 0 || $this->socketColor_2 != 0 || $this->socketColor_3 != 0;
    }

    public function has_spell_info()
    {
        return $this->spellid_1 != 0 || $this->spellid_2 != 0 || $this->spellid_3 != 0 || $this->spellid_4 != 0 || $this->spellid_5 != 0;
    }
}   
