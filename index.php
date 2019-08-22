<?php

require 'Cart.php';

$cart = new Cart;
$product = new Product;
$service = new Service;

$cart->addItem();

foreach ($cart->getItems()as $item) {
  // code...
}
 ?>
