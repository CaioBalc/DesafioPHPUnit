<?php

class StringManipulator{
    function capitalizeString($string){
        return ucfirst($string);
    }

    public function concatenateStrings($string1, $string2) {
        return $string1 . $string2;
    }
}