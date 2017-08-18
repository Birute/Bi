<?php
  require_once("Vehicle.php");
  require_once("Car.php");

  $mano_auto = new Car("BMW", 5, "raudonas", 4);
  echo $mano_auto->get_car_info();
?>
