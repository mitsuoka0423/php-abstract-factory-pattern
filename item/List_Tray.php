<?php


class List_Tray extends Tray
{

	public function makeHTML(): string
	{
		$html = '- ' . $this->caption . "\n";

		foreach ($this->tray as $item)
		{
			$html .= $item->makeHTML();
		}

		return $html;
	}
}