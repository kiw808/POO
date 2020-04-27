<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

// Car.php

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    //Properties

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $lights = false;

    // Methods

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getLights() : bool
    {
        return $this->lights;
    }

    public function lightsCheck() : string
    {
        if ($this->lights == true) {
            return 'Lights are on !';
        }
        else {
            return 'Lights are off !';
        }
    }

    public function setLights(bool $value) : void
    {
        $this->lights = $value;
    }

    public function switchOn() : bool
    {
        $this->lights = true;
        return $this->lights;
    }

    public function switchOff() : bool
    {
        $this->lights = false;
        return $this->lights;
    }
}