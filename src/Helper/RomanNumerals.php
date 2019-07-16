<?php
namespace App\Helper;

use \App\Interfaces\RomanNumeralGenerator;

class RomanNumerals implements RomanNumeralGenerator
{
    const arrDigits = [
        1 => 'I',
        5 => 'V',
        10 => 'X',
        50 => 'L',
        100 => 'C',
        500 => 'D',
        1000 => 'M',
    ];

    public static function generate(int $number): String
    {
        return '';
    }
}