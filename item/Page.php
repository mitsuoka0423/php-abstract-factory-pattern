<?php


abstract class Page
{
	protected $title = '';
	protected $author = '';
	protected $contents = array();

	public function __construct($title, $author)
	{
		$this->title = $title;
		$this->author = $author;
		$this->contents = array();
	}

	public function add($item)
	{
		$this->contents[] = $item;
	}

	public function output()
	{
		echo $this->makeHTML();
	}

	public abstract function makeHTML(): string;
}