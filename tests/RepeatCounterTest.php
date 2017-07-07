<?php

require_once "src/RepeatCounter.php";

class RepeatCounterTest extends PHPUnit_Framework_TestCase
{
    function testCountRepeatsSinlgeWord()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input = "for";
        //Act
        $result = $test_RepeatCounter->countRepeats($input);
        //Assert
        $this->assertEquals("count: 0", $result);
    }
}
?>
