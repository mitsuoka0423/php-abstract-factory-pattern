<?php


class Table_Tray extends Tray
{

	public function makeHTML(): string
	{
		$html = '| ' . $this->caption . '                                                 |' . "\n";
		$html .= '| caption              | url                            |' . "\n";
		foreach ($this->tray as $item)
		{
			$html .= $item->makeHTML();
		}

		return $html;
	}
}