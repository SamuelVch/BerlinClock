<?php


class BerlinClock
{
    private $arrayMinutes = [];

    public function translate(int $int): array
    {
        return $this->createTableSimpleMinute($int);
    }

    public function translate5Minutes(int $int): array
    {
        return ["yellow"];
    }

    public function createTableSimpleMinute(int $int): array
    {
        for ($i = 0; $i < $int; $i++) {
            $this->arrayMinutes[$i] = "yellow";
        }
        return $this->arrayMinutes;
    }
}