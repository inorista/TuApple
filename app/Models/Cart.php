<?php
namespace App\Models;

class Cart {
  public $items;
  function __construct() {
    $this->items = array();
  }
  function addItem($newItem) {
    foreach ($this->items as $item) {
      if ($item->product->ID == $newItem->product->ID) {
        $item->quantity += $newItem->quantity;
        return;
      }
    }
    array_push($this->items, $newItem);
  }
  function getSize() {
    return count($this->items);
  }
  function getTotal() {
    $total = 0;
    foreach ($this->items as $item) {
      $total += $item->product->Price * $item->quantity;
    }
    return ($total);
  }
  function getVAT(){
    $VAT = 0;
    foreach ($this->items as $item) {
      $VAT += $item->product->Price * $item->quantity;
    }
    return ($VAT * 10 /100);
  }
  function getALLTOTAL(){
    $a = $this->getVAT();
    $b = $this->getTotal();
    $c = 35000;
    $d = ($a + $b + $c);
    return $d;
  }
  function getItem($id) {
    foreach ($this->items as $item)
      if ($item->product->ID == $id)
        return $item;
    return null;
  }
  function removeItem($item) {
    if (($key = array_search($item, $this->items)) !== false)
      unset($this->items[$key]);
  }
}
?>