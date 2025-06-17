<?php

require_once './AvancerTrait.php';

class Bateau
{
    use AvancerTrait;
    public function __construct(string $name, int $buildyear, string $type, int $passengerNumber)
    {

    }

    public function reculer()
    {

    }
}
