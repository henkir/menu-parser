<?php

interface iMenuPage
{
  public function getName();
  public function getMenu($day);
}

abstract class MenuPage implements iMenuPage
{

}

?>
