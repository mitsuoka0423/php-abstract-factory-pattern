<?php


class Table_Link extends Link
{

	public function makeHTML(): string
	{
		return sprintf('| %-20s | %-30s |', $this->caption, $this->url) . "\n";
	}
}