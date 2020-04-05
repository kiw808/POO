<?php

// Car.php

class Car
{
    // PROPERTIES
    // Number of wheels
    /**
     * @var int
     */
    private $nbWheels = 4;

    /**
     * @return string
     */
    public function getNbWheels() : string
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }

    // Current Speed
    /**
     * @var int
     */
    private $currentSpeed = 0;

    /**
     * @return int
     */
    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed) : void
    {
        $this->currentSpeed = $currentSpeed;
    }

    // Color
    /**
     * @var string
     */
    private $color;

    /**
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    // Number of seats
    /**
     * @var int
     */
    private $nbSeats = 4;

    /**
     * @return int
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats) : void
    {
        $this->nbSeats = $nbSeats;
    }

    // Energy
    /**
     * @var string
     */
    private $energy;

    /**
     * @return string
     */
    public function getEnergy() : string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy) : void
    {
        $this->energy = $energy;
    }

    // Energy level
    /**
     * @var int
     */
    private $energyLevel = 0;

    /**
     * @return int
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }

    // Required parameters
    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    // METHODS
    // Start engine
    public function start() : string
    {
        if ($this->getEnergyLevel() > 0) {
            return 'Started <br>';
        }
        else {
            return 'Could not start, no energy <br>';
        }
    }

    // Forward
    public function forward() : string
    {
        $this->currentSpeed = 50;
        $sentence = "";
        if ($this->energyLevel > 0) {   // Consuming energy if moving forward
            $this->energyLevel --;
            $sentence = "Moving forward <br>";
        }
        else {  // Stopping Car if no more energy
            $this->setCurrentSpeed(0);
            $sentence = "Car stopped <br>";
        }
        return $sentence;
    }

    // Brake
    public function brake() : string
    {
        $sentence = '';
        while ($this->currentSpeed > 0) {   // Applying brakes while Car is moving forward
            $this->currentSpeed = $this->currentSpeed -3;
            $sentence .= 'Braking ! <br>';
        }
        $sentence .= 'Car stopped <br>';
        return $sentence;
    }

    // Dump
    public function dump()
    {
        var_dump($this);
    }
}