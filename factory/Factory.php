<?php

abstract class Factory
{
	public static function get_factory($type_name): Factory
	{
		if ($type_name === 'list')
		{
			return new List_Factory();
		}
		else if ($type_name === 'table')
		{
			return new Table_Factory();
		}
		else
		{
			throw new Error('Invalid type name.');
		}
	}

	public abstract function create_link($caption, $url): Link;
	public abstract function create_tray($caption): Tray;
	public abstract function create_page($title, $author): Page;
}