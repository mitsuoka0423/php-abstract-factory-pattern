<?php


class Table_Factory extends Factory
{

	public function create_link($caption, $url): Link
	{
		return new Table_Link($caption, $url);
	}

	public function create_tray($caption): Tray
	{
		return new Table_Tray($caption);
	}

	public function create_page($title, $author): Page
	{
		return new Table_Page($title, $author);
	}
}