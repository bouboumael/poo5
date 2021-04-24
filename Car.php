<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    //POO 4
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    //POO 4
    public function setHasParkBrake(): void
    {
        if ($this->hasParkBrake === true) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
    }

    //POO 4
    public function start (): string
    {
        try {
            if ($this->hasParkBrake === true) {
                throw new Exception("The handbrake is active<br> Marge says: Homeeeeer!!!! <br>");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            $this->setHasParkBrake();
            echo "The handbrake is off<br>";
        } finally {
            echo "Homer says: My car rolls like a donut";
            return parent::start();
        }
    }
}