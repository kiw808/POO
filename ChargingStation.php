<?php

class ChargingStatioin 
{
    public function fullCharge(RechargeableInterface $vehicle)
    {
        $vehicle->charge(100);
    }
}