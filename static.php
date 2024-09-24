<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


class Weather{

    // Static properties and methods can be accessed without instantiating the class.

    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFahrenheit($c){
        return "$c degree is " . $c * 9/5 + 32 . " Fahrenheit"; // Formula for Celsius to Fahrenheit
    }

    public static function determineTempCondition($f){
        if ($f < 40) {
            return self::$tempConditions[0];   // how we access static properties in a method inside the class
        } elseif ($f < 70) {
            return self::$tempConditions[1];
        } else {
            return self::$tempConditions[2];
        }
    }
}


// instantiating the class (creating an object)

// $weatherInstance = new Weather();   // we don't need this line again since we already made our properties and function static.
// print_r($weatherInstance->tempConditions);


// calling a staic property without creating an instance
print_r(Weather::$tempConditions) . '<br />';
$farenheight = Weather::celsiusToFahrenheit(20);
echo $farenheight . '<br / >';
echo Weather::determineTempCondition(38);

?>