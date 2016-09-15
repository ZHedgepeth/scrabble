<?php

    require_once (__DIR__ . "/../src/Scrabble.php");

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_SingleLowerAlphaValue1()
        {

            //ARRANGE
            $word_to_score = "o";
            $expected_score = 1;
            $scrabble_instance = new Scrabble($word_to_score);

            //ACT
            $test_result = $scrabble_instance->checkScore($word_to_score);

            //ASSERT
            $this->assertEquals($expected_score, $test_result);
        }
        function test_SingleLowerAlphaValue2()
        {

            //ARRANGE
            $word_to_score = "g";
            $expected_score = 2;
            $scrabble_instance = new Scrabble($word_to_score);

            //ACT
            $test_result = $scrabble_instance->checkScore($word_to_score);

            //ASSERT
            $this->assertEquals($expected_score, $test_result);
        }

        function test_SingleLowerAlphaValue3()
        {

            //ARRANGE
            $word_to_score = "c";
            $expected_score = 3;
            $scrabble_instance = new Scrabble($word_to_score);

            //ACT
            $test_result = $scrabble_instance->checkScore($word_to_score);

            //ASSERT
            $this->assertEquals($expected_score, $test_result);
        }

        function test_SingleLowerAlphaValue4()
        {

            //ARRANGE
            $word_to_score = "h";
            $expected_score = 4;
            $scrabble_instance = new Scrabble($word_to_score);

            //ACT
            $test_result = $scrabble_instance->checkScore($word_to_score);

            //ASSERT
            $this->assertEquals($expected_score, $test_result);
        }
        function test_SingleLowerAlphaValue5()
        {

            //ARRANGE
            $word_to_score = "k";
            $expected_score = 5;
            $scrabble_instance = new Scrabble($word_to_score);

            //ACT
            $test_result = $scrabble_instance->checkScore($word_to_score);

            //ASSERT
            $this->assertEquals($expected_score, $test_result);
        }
        function test_SingleLowerAlphaValue8()
        {

            //ARRANGE
            $word_to_score = "x";
            $expected_score = 8;
            $scrabble_instance = new Scrabble($word_to_score);

            //ACT
            $test_result = $scrabble_instance->checkScore($word_to_score);

            //ASSERT
            $this->assertEquals($expected_score, $test_result);
        }
        function test_SingleLowerAlphaValue10()
        {

            //ARRANGE
            $word_to_score = "z";
            $expected_score = 10;
            $scrabble_instance = new Scrabble($word_to_score);

            //ACT
            $test_result = $scrabble_instance->checkScore($word_to_score);

            //ASSERT
            $this->assertEquals($expected_score, $test_result);
        }

        function test_fullWord()
        {

            //ARRANGE
            $word_to_score = "zebra";
            $expected_score = 16;
            $scrabble_instance = new Scrabble($word_to_score);

            //ACT
            $test_result = $scrabble_instance->checkScore($word_to_score);

            //ASSERT
            $this->assertEquals($expected_score, $test_result);
        }

    }

?>
