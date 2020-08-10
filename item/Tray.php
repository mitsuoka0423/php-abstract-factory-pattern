<?php

require_once('./item/Item.php');

abstract class Tray extends Item
{
	/**
	 * @var array<Item> $tray
	 */
	protected $tray = array();

	public function __construct($caption)
	{
		parent::__construct($caption);
	}

	/**
	 * @param $item Item
	 */
	public function add($item)
	{
		$this->tray[] = $item;
	}
}