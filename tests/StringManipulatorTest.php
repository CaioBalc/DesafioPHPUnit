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
}