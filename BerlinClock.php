<?php


class BerlinClock
{
    private $arrayMinutes = [];
    private $array5Minutes = [];
    private $arrayHours = [];

    public function translate(int $int): array
    {
        return $this->createTableSimpleMinute($int);
    }

    public function translate5Minutes(int $int): array
    {
        $nbrIteration = floor($int/5);
        return  $this->createTable5Minutes($nbrIteration);
    }

    public function translateHour(int $int): array
    {
        return $this->createTableSimpleHour($int);
    }

    public function translate5Hours(int $int): array
    {
        return ["red"];
    }

    public function createTableSimpleMinute(int $int): array
    {
        for ($i = 0; $i < $int; $i++) {
            $this->arrayMinutes[$i] = "yellow";
        }
        return $this->arrayMinutes;
    }

    public function createTable5Minutes(int $nbrIteration): array
    {
        for ($i = 0; $i < $nbrIteration; $i++) {
            if (($i + 1) % 3 === 0) {
                $this->array5Minutes[$i] = "red";
            } else {
                $this->array5Minutes[$i] = "yellow";
            }
        }
        return $this->array5Minutes;
    }

    public function createTableSimpleHour(int $int): array
    {
        for($i = 0; $i < $int; $i++) {
            $this->arrayHours[$i] = "red";
        }
        return $this->arrayHours;
    }
}