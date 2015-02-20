<?php

require 'menu_page.php';

foreach (glob('menu_pages/*.php') as $filename)
{
  include $filename;
}

?>
