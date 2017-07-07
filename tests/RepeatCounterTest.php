<?php

require_once "src/RepeatCounter.php";

class RepeatCounterTest extends PHPUnit_Framework_TestCase
{
    function testCountRepeatsSinlgeWord()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input_one = "for";
        $input_two = "the";
        //Act
        $result = $test_RepeatCounter->countRepeats($input_one, $input_two);
        //Assert
        $this->assertEquals("count: 0", $result);
    }
}
?>
