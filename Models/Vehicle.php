<?php

include_once __DIR__.'/../Traits/Weightable.php';

class Vehicle {

    use Weightable;

    public 
    $registration_year, $brand, $seats, $fuel;

    public function __construct(int $registration_year, string $brand, int $seats, string $fuel)
    {
        $this->registration_year = $registration_year;
        $this->brand = $brand;
        $this->seats = $seats;
        $this->fuel = $fuel;
    }
}