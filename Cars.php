<?php

class Car {
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel; 

   public function __construct(string $color, int $nbSeats, string $energy) 
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getColor(): string 
    {
        return $this->color;
    }

    public function getNbSeats(): int 
    {
        return $this->nbSeats;
    }

    public function getCurrentSpeed(): int 
    {
        return $this->currentSpeed;
    }

    public function getEnergy(): string 
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int 
    {
        return $this->energyLevel;
    }

    public function setColor($color): string 
    {
        return $this->color = $color; 
    }

    public function start()
    {
        $this->currentSpeed = 1;
        return "La voiture démarre";
    }

    public function forward()
    {
        $this->currentSpeed = 30;
        return "Go ! ";
    }

    public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) 
    {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }

}
