<?php


class Bicycle
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

    public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }

    private function dump()
    {
        var_dump($this);
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function __construct(string $color)
    {
        $this->color = $color;
    }
}

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $fuelType;
    private int $fuelLevel;

    public function __construct(string $color, int $nbSeats, string $fuelType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $fuelType;
    }

    public function forward()
    {
        $this->currentSpeed = 30;
    }

    public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }

    public function start() 
    {
        $this->fuelLevel = 100;
        return "préfego";
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbWheels(): string
    {
        return $this->nbWheels;
    }

    public function getNbSeats(): string
    {
        return $this->nbSeats;
    }

    public function getCurrentSpeed(): string
    {
        return $this->currentSpeed;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function getFuelLevel(): string
    {
        return $this->fuelLevel;
    }




}


?>