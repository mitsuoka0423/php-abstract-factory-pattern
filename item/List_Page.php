<?php


class List_Page extends Page
{
	public function __construct($title, $author)
	{
		parent::__construct($title, $author);
	}

	public function makeHTML(): string
	{
		$html = '<ul>';
		foreach ($this->contents as $item)
		{
			$html .= $item->makeHTML();
		}
		$html .= '</ul>';
		return $html;
	}
}