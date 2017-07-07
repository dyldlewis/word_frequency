<?php

require_once "src/RepeatCounter.php";

class RepeatCounterTest extends PHPUnit_Framework_TestCase
{
    function testCountRepeatsNoMatch()
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

    function testCountRepeatsSingleWord()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input_one = "apple";
        $input_two = "apple";

        //Act
        $result = $test_RepeatCounter->countRepeats($input_one, $input_two);
        //Assert
        $this->assertEquals("count: 1", $result);
    }

    function testCountRepeatsMultiWord()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input_one = "apple";
        $input_two = "apple on my apple";

        $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

        $this->assertEquals("count: 2", $result);
    }

    function testCountRepeatsCaps()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input_one = "chicken";
        $input_two = "Chicken soup tastes great with chicken breast";

        $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

        $this->assertEquals("count: 2", $result);
    }

}
?>
