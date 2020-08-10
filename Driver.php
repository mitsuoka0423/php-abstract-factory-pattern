<?php

require_once('./factory/Factory.php');
require_once('./factory/List_Factory.php');
require_once('./factory/Table_Factory.php');

$list_factory = Factory::get_factory($argv[1]);

$jp_yahoo = $list_factory->create_link('Yahoo!Japan', 'https://yahoo.co.jp/');
$us_yahoo = $list_factory->create_link('Yahoo!', 'https://yahoo.com/');

$tray_yahoo = $list_factory->create_tray('yahoo');
$tray_yahoo->add($jp_yahoo);
$tray_yahoo->add($us_yahoo);

$page = $list_factory->create_page('Link Page', 'Takahiro Mitsuoka');
$page->add($tray_yahoo);
$page->output();
