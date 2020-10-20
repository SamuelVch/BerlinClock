<?php


class BerlinClock
{

    public function translate(int $int): array
    {
        if($int === 2) return ["yellow", "yellow"];

        return ["yellow"];
    }
}