<?php


class List_Link extends Link
{

	public function makeHTML(): string
	{
		return sprintf("  ".'- %s: %s'."\n", $this->caption, $this->url);
	}
}