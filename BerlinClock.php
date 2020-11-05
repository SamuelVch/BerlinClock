<?php


class BerlinClock
{
    private $arrayMinutes = ["black", "black", "black", "black"];
    private $array5Minutes = ["black", "black", "black", "black", "black", "black", "black", "black", "black", "black", "black"];
    private $arrayHours = ["black", "black", "black", "black"];
    private $array5Hours = ["black", "black", "black", "black"];

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
        $nbrIteration = floor($int/5);
        return $this->createTable5Hours($nbrIteration);
    }

    public function translateSeconds(int $int): array
    {
        if($int === 1) return ["black"];
        return ["red"];
    }

    public function createTableSimpleMinute(int $int): array
    {
        for ($i = 0; $i < 4; $i++) {
            if ($i < $int) {
                $this->arrayMinutes[$i] = "yellow";
            }
        }
        return $this->arrayMinutes;
    }

    public function createTable5Minutes(int $nbrIteration): array
    {
        for ($i = 0; $i < 11; $i++) {
            if($i < $nbrIteration) {
                if (($i + 1) % 3 === 0) {
                    $this->array5Minutes[$i] = "red";
                } else {
                    $this->array5Minutes[$i] = "yellow";
                }
            }
        }
        return $this->array5Minutes;
    }

    public function createTableSimpleHour(int $int): array
    {
        for($i = 0; $i < 4; $i++) {
            if($i < $int) {
                $this->arrayHours[$i] = "red";
            }
        }
        return $this->arrayHours;
    }

    public function createTable5Hours(int $nbrIteration): array{
        for($i =0; $i<4;$i++){
            if($i<$nbrIteration) {
                $this->array5Hours[$i] = "red";
            }
        }
        return $this->array5Hours;
    }
}