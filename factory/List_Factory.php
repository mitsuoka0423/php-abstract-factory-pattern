<?php

require_once('./item/Link.php');
require_once('./item/Tray.php');
require_once('./item/Page.php');
require_once('./item/List_Link.php');
require_once('./item/List_Tray.php');
require_once('./item/List_Page.php');

class List_Factory extends Factory
{

	public function create_link($caption, $url): Link
	{
		return new List_Link($caption, $url);
	}

	public function create_tray($caption): Tray
	{
		return new List_Tray($caption);
	}

	public function create_page($title, $author): Page
	{
		return new List_Page($title, $author);
	}
}