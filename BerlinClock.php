<?php


class BerlinClock
{

    public function translate(int $int): array
    {
        if($int === 2) return ["yellow", "yellow"];
        if($int === 3) return ["yellow", "yellow", "yellow"];

        return ["yellow"];
    }
}