<?php
$value = '';
class Weather {
    public static $conditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFareheit($c) {
        $value = $c * 9 / 5 + 32;
        return $value;
    }

    public static function determineConditions($f){
        if($f > 40){
            return self::$conditions[0];
        }elseif($f > 70){
            return self::$conditions[1];
        }else{
            return self::$conditions[2];
        }
    }
}

echo Weather::celsiusToFareheit(24). '<br>';
echo Weather::determineConditions($value);

?>

NOTE: static properties are accessed through the class itself and not through an instance of that class