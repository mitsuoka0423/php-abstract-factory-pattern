<?php

require_once('./item/Item.php');

abstract class Link extends Item
{
	protected $url = '';
	public function __construct($caption, $url)
	{
		parent::__construct($caption);
		$this->url = $url;
	}
}