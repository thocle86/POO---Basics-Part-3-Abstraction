<?php

abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles = [];

    /**
     * @var int
     */
    protected $nbLane = 0;

    /**
     * @var int
     */
    protected $maxSpeed = 0;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    /*Ajouter à la classe HighWay une méthode abstraite addVehicle() prenant en paramètre un objet de type Vehicle.*/
 
    abstract public function addVehicle($vehicle);

    public function __toString()
    {
        $str = "<h3>".get_class($this)." / Nb lanes: ".$this->nbLane." / Max speed: ".$this->maxSpeed."</h3>";
        return $str;
    }
}