<?php

require_once 'menu_parser_bootstrap.php';

$husman = new HusmanMenu();
echo 'Name: ', $husman->getName(), "<br />\n";
$chili = new ChiliMenu();
echo 'Name: ', $chili->getName(), "<br />\n";

?>
