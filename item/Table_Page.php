<?php


class Table_Page extends Page
{
	public function __construct($title, $author)
	{
		parent::__construct($title, $author);
	}

	public function makeHTML(): string
	{
		foreach ($this->contents as $item)
		{
			$html .= $item->makeHTML();
		}
		return $html;
	}
}