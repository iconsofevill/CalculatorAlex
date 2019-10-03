<?php

namespace App;

class Calculator
{

    public function sum(...$values)
    {
        $s = 0;

        foreach ($values as $value) {
            $s += $value;
        }

        return $s;
    }

    public function pow($base, $exp)
    {
        return pow($base, $exp);
    }

    public function minus (float $a, float $b)  : float {

        return $a - $b;

    }

    public function mult (float $a, float $b) : float {

        return $a * $b;

    }

    public function div (float $a, float $b) : float {

        return $a / $b;

    }

    public function per (float $a, float $b) : float {

        return $a % $b;

    }

    public function equal ($a, $b) : bool {

        return ($a == $b) ? true : false;

    }

    public function more ($a, $b) : bool {

        return ($a > $b) ? true : false;

    }

    public function less ($a, $b) : bool {

        return ($a < $b) ? true : false;

    }

    public function sort (array $array) : array {

        sort($array);
        return $array;

    }

    public function reverse (array $array) : array {

        $reversed = array_reverse($array);
        return $reversed;

    }

}
