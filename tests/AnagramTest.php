<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_compareWords_oneLetterTrue()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = ['a','a'];

            //Act
            $result = $test_Anagram->compareWords($input);

            //Assert
            $this->assertEquals([true], $result);
        }

        function test_compareWords_oneLetterFalse()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = ['a','b'];

            //Act
            $result = $test_Anagram->compareWords($input);

            //Assert
            $this->assertEquals([false], $result);
        }

        function test_compareWords_twoLettersTrue()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = ['ab','ba'];

            //Act
            $result = $test_Anagram->compareWords($input);

            //Assert
            $this->assertEquals([true], $result);
        }

        function test_compareWords_twoLettersFalse()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = ['ab','cd'];

            //Act
            $result = $test_Anagram->compareWords($input);

            //Assert
            $this->assertEquals([false], $result);
        }
    }

?>
