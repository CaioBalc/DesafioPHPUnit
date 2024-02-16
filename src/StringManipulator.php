<?php

class StringManipulator{
    function capitalizeString($string){
        return ucfirst($string);
    }

    public function concatenateStrings($string1, $string2) {
        return $string1 . $string2;
    }

    # Exercício 2
    public function countVowels($str) {
        // Use uma expressão regular para contar as vogais (maiúsculas e minúsculas)
        preg_match_all('/[aeiouAEIOU]/', $str, $matches);

        // Retorna a contagem de vogais
        return count($matches[0]);
    }

}