<?php
  class Car extends Vehicle{
    private $manufacturer, $wheels;

    function __construct($manufacturer, $seats, $color, $wheels){
      parent::__construct($seats, $color);
      $this->wheels = $wheels;
      $this->manufacturer = $manufacturer;
    }

    function get_wheels(){
      return $this->wheels;
    }

    function get_manufacturer(){
      return $this->manufacturer;
    }

    function get_color(){
      return parent::get_color();
    }

    function get_seats(){
      return parent::get_seats();
    }

    function get_car_info(){
      return $this->get_manufacturer().", ".$this->get_seats()." vietų, ".$this->get_color().", ".$this->wheels." ratų.";
    }
  }
 ?>
