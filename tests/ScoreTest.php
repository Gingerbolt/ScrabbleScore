<?php
    require_once "src/Score.php";

    class ScoreTest extends PHPUnit_Framework_TestCase{

        function testScrabbleDabbleOneLetter()
        {
            //Arrange
            $test_score = new Score;
            $input = 'K';

            //Act
            $result = $test_score->scrabbleDabble($input);

            //Assert
            $this->assertEquals(5, $result);
        }
    }

?>
