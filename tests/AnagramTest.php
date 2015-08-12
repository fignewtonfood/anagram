<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_compareWords_oneLetterTrue()
        {
            //Arrange
            $test_Anagram = new Anagram;
            // $input = ['a','a'];
            $input1 = 'a';
            $input2 = 'a';

            //Act
            $result = $test_Anagram->compareWords($input1, $input2);

            //Assert
            $this->assertEquals(['a'], $result);
        }

        function test_compareWords_oneLetterFalse()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = 'a';
            $input2 = 'b';

            //Act
            $result = $test_Anagram->compareWords($input1, $input2);

            //Assert
            $this->assertEquals(null, $result);
        }

        function test_compareWords_twoLettersTrue()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = 'ab';
            $input2 = 'ba';

            //Act
            $result = $test_Anagram->compareWords($input1, $input2);

            //Assert
            $this->assertEquals('ba', $result);
        }

        function test_compareWords_twoLettersFalse()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = 'ab';
            $input2 = 'cd';

            //Act
            $result = $test_Anagram->compareWords($input1, $input2);

            //Assert
            $this->assertEquals(null, $result);
        }

        function test_compareWords_threeInputsAllTrue()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = 'abc';
            $input2 = 'bac,cab';

            //Act
            $result = $test_Anagram->compareWords($input1,$input2);

            //Assert
            $this->assertEquals(['bac','cab'], $result);
        }

        function test_compareWords_threeInputsAllFalse()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = 'abc';
            $input2 = 'def,ghi';

            //Act
            $result = $test_Anagram->compareWords($input1, $input2);

            //Assert
            $this->assertEquals(null, $result);
        }

        function test_compareWords_threeInputsMixedOutput()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = 'abc';
            $input2 = 'cab,def';

            //Act
            $result = $test_Anagram->compareWords($input1, $input2);

            //Assert
            $this->assertEquals('cab', $result);
        }
    }

?>
