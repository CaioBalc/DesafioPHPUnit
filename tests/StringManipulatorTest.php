<?php

use PHPUnit\Framework\TestCase;

require_once "src/StringManipulator.php";

class StringManipulatorTest extends TestCase{
    public function testCapitalizeStringVazia() {
        $stringManipulator = new StringManipulator();

        $result = $stringManipulator->capitalizeString('');

        $this->assertEquals('', $result);
    }

    public function testConcatenateStringsComEspaco() {
        $stringManipulator = new StringManipulator();

        $result = $stringManipulator->concatenateStrings('Hello', ' World');

        $this->assertEquals('Hello World', $result);
    }

    # Exercício 2
    public function testCountVowels() {
        $stringManipulator = new StringManipulator();

        // Testa uma string com vogais maiúsculas e minúsculas
        $result1 = $stringManipulator->countVowels('Hello World');
        $this->assertEquals(3, $result1, 'countVowels() should correctly count vowels');

        // Testa uma string sem vogais
        $result2 = $stringManipulator->countVowels('BCDFGHJKLMNPQRSTVWXYZ');
        $this->assertEquals(0, $result2, 'countVowels() should return 0 for a string without vowels');

        // Testa uma string com todas as vogais
        $result3 = $stringManipulator->countVowels('aeiouAEIOU');
        $this->assertEquals(10, $result3, 'countVowels() should return the correct count for a string with all vowels');
    }
}