<?php
  class Menu{
    private $name;
    private $price;
    private $image;
    private $orderCount=0; //注文数
    private static $count=0; //メニュー数
  }

  public function __constructor( $name,$price,$image ) {
    $this->name=$name;
    $this->price=$price;
    $this->image=$image;
    self:: $count++; //メニュー数のカウント
  }

  public function getName() {
    return $this->name;
  }
  public function getImage() {
    return $this->image;
  }
  public function getOrderCount() {
    return $this->orderCount;
  }
  public function setOrderCount($orderCount) {
    $this->orderCount=$orderCount;
  }
  







?>