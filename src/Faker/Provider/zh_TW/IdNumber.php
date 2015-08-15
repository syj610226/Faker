<?php

namespace Faker\Provider;

class IdNumber extends \Faker\Provider\Base {

    public static function idNumber() {
        $city = array(
            'A' => 1, 'B' => 10, 'C' => 19, 'D' => 28, 'E' => 37,
            'F' => 46, 'G' => 55, 'H' => 64, 'I' => 39, 'J' => 73,
            'K' => 82, 'L' => 2, 'M' => 11, 'N' => 20, 'O' => 48,
            'P' => 29, 'Q' => 38, 'R' => 47, 'S' => 56, 'T' => 65,
            'U' => 74, 'V' => 83, 'W' => 21, 'X' => 3, 'Y' => 12,
            'Z' => 30
        );

        $multiply = array(7, 6, 5, 4, 3, 2, 1);

        $first = chr(mt_rand(65, 90));
        $total = $city[$first];

        $IdNumber = mt_rand(1, 2);
        $total += $IdNumber * 8;

        for($i = 0; $i < 7; $i++) {
            $thisNumber = mt_rand(0, 9);
            $IdNumber .= $thisNumber;
            $total += $thisNumber * $multiply[$i];
        }

        return ($total % 10 == 0 )? $first . $IdNumber . 0: $first . $IdNumber . (10 - $total % 10);
    }
}