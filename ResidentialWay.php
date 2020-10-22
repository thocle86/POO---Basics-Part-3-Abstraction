<?php

require_once "HighWay.php";

final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles["Cars"] += 1;
        } elseif ($vehicle instanceof Bicycle) {
            $this->currentVehicles["Bicycles"] += 1;
        } else {
            echo "<h4> This vehicle is not accept in this road </h4>";
        }
    }
}