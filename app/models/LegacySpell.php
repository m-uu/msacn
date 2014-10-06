<?php

class LegacySpell extends Eloquent
{
	protected $table = 'legacy_spell';

	public static function get_value_info($id, $effIndex)
	{
		$spell = LegacySpell::find($id);

		if (!$spell)
			return 0;

		switch ($effIndex)
		{
			case 1:
				return $spell->EffectDieSides1 == 0 || $spell->EffectDieSides1 == 1  || $spell->EffectDieSides1 == -1 ? abs($spell->EffectBasePoints1 + $spell->EffectDieSides1)
			: abs($spell->EffectBasePoints1 - $spell->EffectDieSides1).'-'.abs($spell->EffectBasePoints1 + $spell->EffectDieSides1);
			case 2:
				return $spell->EffectDieSides2 == 0 || $spell->EffectDieSides2 == 1  || $spell->EffectDieSides2 == -1 ? abs($spell->EffectBasePoints2 + $spell->EffectDieSides2)
			: abs($spell->EffectBasePoints2 - $spell->EffectDieSides2).'-'.abs($spell->EffectBasePoints2 + $spell->EffectDieSides2);
			case 3:
				return $spell->EffectDieSides3 == 0 || $spell->EffectDieSides3 == 1  || $spell->EffectDieSides3 == -1 ? abs($spell->EffectBasePoints3 + $spell->EffectDieSides3)
			: abs($spell->EffectBasePoints3 - $spell->EffectDieSides3).'-'.abs($spell->EffectBasePoints3 + $spell->EffectDieSides3);
		}
	}

	private function format_value($string)
	{
		$result = $string;
		// absolute value - $s
		$result = str_replace(array('$s1', '$S1'), $this->EffectDieSides1 == 0 || $this->EffectDieSides1 == 1  || $this->EffectDieSides1 == -1 ? abs($this->EffectBasePoints1 + $this->EffectDieSides1)
			: abs($this->EffectBasePoints1 - $this->EffectDieSides1).'-'.abs($this->EffectBasePoints1 + $this->EffectDieSides1), $result);
		$result = str_replace(array('$s2', '$S2'), $this->EffectDieSides2 == 0 || $this->EffectDieSides2 == 1  || $this->EffectDieSides2 == -1 ? abs($this->EffectBasePoints2 + $this->EffectDieSides2)
			: abs($this->EffectBasePoints2 - $this->EffectDieSides2).'-'.abs($this->EffectBasePoints2 + $this->EffectDieSides2), $result);
		$result = str_replace(array('$s3', '$S3'), $this->EffectDieSides3 == 0 || $this->EffectDieSides3 == 1  || $this->EffectDieSides3 == -1 ? abs($this->EffectBasePoints3 + $this->EffectDieSides3)
			: abs($this->EffectBasePoints3 - $this->EffectDieSides3).'-'.abs($this->EffectBasePoints3 + $this->EffectDieSides3), $result);

		// value - $m
		return $result;
	}

	private function format_target_count($string)
	{
		$result = $string;
		$result = str_replace(array('$x1', '$X1'), $this->EffectChainTarget1, $result);
		$result = str_replace(array('$x2', '$X2'), $this->EffectChainTarget2, $result);
		$result = str_replace(array('$x2', '$X3'), $this->EffectChainTarget3, $result);
		return $result;
	}

	private function format_duration($string)
	{
		$result = $string;
		$result = str_replace(array('$d', '$D'), $this->getDurationString(), $result);
		return $result;
	}

	public function formatted_description()
	{
		$result = $this->_Description5;
		$result = $this->format_value($result);
		$result = $this->format_target_count($result);
		$result = $this->format_duration($result);
		return $result;
	}

	public function getDurationString()
	{
		$d = LegacySpellDuration::find($this->DurationIndex);
		if ($d)
		{
			$second = $d->maxDuration / 1000;
			$day = floor($second / (60 * 60 * 24));
			$second -= 60 * 60 * 24 * $day;
			$hour = floor($second / (60 * 60));
			$second -= 60 * 60 * $hour;
			$minute = floor($second / 60);
			$second -= 60 * $minute;

			$output = '';
			$output .= $day == 0 ? '' : $day.Legacy::locale('day');
			$output .= $hour == 0 ? '' : $hour.Legacy::locale('hour');
			$output .= $minute == 0 ? '' : $minute.Legacy::locale('minute');
			$output .= $second == 0 ? '' : $second.Legacy::locale('second');

			return $output;
		}
	}	
}