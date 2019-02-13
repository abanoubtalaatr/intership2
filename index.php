<?php 

require_once "config.php";

require_once 'manageSite.php';

$manage = new manageSite();
$manage->get_page();