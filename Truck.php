<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private int $stockageCapacity;
    private int $loading = 0;

    public function __construct(int $stockageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->stockageCapacity = $stockageCapacity;
    }

    public function truckFill (): string
    {
        if ($this->loading === 0) {
            return 'Empty';
        } elseif ($this->loading > 0 && $this->loading < $this->stockageCapacity) {
            return 'In Filling';
        } elseif ($this->loading > $this->stockageCapacity) {
            return 'The truck is too loaded';
        } else {
            return 'Full';
        }
    }
    
    public function getStockageCapacity(): int
    {
        return $this->stockageCapacity;
    }

    public function setStockageCapacity(int $stockageCapacity): void
    {
        $this->stockageCapacity = $stockageCapacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
}