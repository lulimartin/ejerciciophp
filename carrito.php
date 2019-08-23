<?php
/**
 *
 */
class Cart
{
  private $items = [];

  public function addItem( PriaceableInterface $item)
  {
    $this->$items[] = $item;
  }

  public function getItems()
  {
    return $this->items;

  }
}


 ?>
