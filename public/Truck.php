<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function storageStatus(): string
    {
        if ($this->loading < $this->storageCapacity) {
            return "in filling";
        }
        return "full";
    }

    /**
     * @return int
     */
        public function setLoading(int $loading)
    {
        $this->loading=$loading;
    }
}

