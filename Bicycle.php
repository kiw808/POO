<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

// Bicycle.php

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * @var bool
     */
    private $light = false;

    public function switchOn() : bool
    {
        if ($this->currentSpeed >= 10) {
            $this->light = true;
            return $this->light;
        }
        else {
            return $this->light;
        }
    }

    public function switchOff() : bool
    {
        $this->light = false;
        return $this->light;
    }

    public function lightCheck() : string
    {
        if ($this->light == true) {
            return 'The light is on !';
        }
        else {
            return 'The light is off !';
        }
    }
}