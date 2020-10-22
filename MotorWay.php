<?php

require_once "HighWay.php";

final class MotorWay extends HighWay
{
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car){
            $this->currentVehicles["Cars"] += 1;
        } else {
            echo "<h4> This vehicle is not accept in this road </h4>";
        }
    }
}