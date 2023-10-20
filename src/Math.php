<?php 

namespace andrisyahputra\Test;

class Math {
    public static function sum(array $values){
        $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    return $total;
    }
}

?>