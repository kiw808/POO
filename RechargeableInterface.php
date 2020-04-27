<?php

interface RechargeableInterface
{
    public function charge(int $percentage);
    public function unload(int $percentage);
}