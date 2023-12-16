<?php

//Challenge it's in https://adventofcode.com/2023/day/1

$input = require_once "input.php";

function keyNumbers($string) 
{
    $number = (string)intval(preg_replace('/[^0-9]+/', '', $string), 10);

    if(strlen($number) >= 2) {
        return $number[0].$number[strlen($number) - 1];
    } else {
        return $number.$number;
    }
}

$numberKeyArray = array_map('keyNumbers', $input);
$sumKeyNumbers = array_sum($numberKeyArray);

// print_r($sumKeyNumbers);

//PART 2

function transformStringToNumber($string)
{
    $numberEnglishList = [
        "oneight" => 18,
        "sevenine" => 79,
        "nineight" => 98,
        "fiveight" => 58,
        "twone" => 21,
        "threeight" => 38,
        "eightwo" => 82,
        "eighthree" => 83,
        "one" => 1,
        "two" => 2,
        "three" => 3,
        "four" => 4,
        "five" => 5,
        "six" => 6,
        "seven" => 7,
        "eight" => 8,
        "nine" => 9,
    ];

    return str_replace(array_keys($numberEnglishList), array_values($numberEnglishList), $string);
}

$keyNumbersTransformStringToo = array_map('transformStringToNumber', $input); 
// print_r($keyNumbersTransformStringToo);
$numberKeyArrayPartTwo = array_map('keyNumbers', $keyNumbersTransformStringToo);
// print_r($numberKeyArrayPartTwo);
$sumKeyNumbersKeyArrayPartTwo = array_sum($numberKeyArrayPartTwo);
print_r($sumKeyNumbersKeyArrayPartTwo);