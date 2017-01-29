<?php
include 'stdlib.php';

$site = new csite();

$page = new cpage("Welcome to my site!");

$content = <<<EOT Welcome to my personal web site! EOT;
$page->setContent($content);

$site->render();

?>