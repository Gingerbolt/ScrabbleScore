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

        function testScrabbleDabbleCaseAgnostic()
        {
            //Arrange
            $test_score = new Score;
            $input = 'k';

            //Act
            $result = $test_score->scrabbleDabble($input);

            //Assert
            $this->assertEquals(5, $result);
        }

        function testScrabbleDabblemultiLetter()
        {
            //Arrange
            $test_score = new Score;
            $input = 'WooD';

            //Act
            $result = $test_score->scrabbleDabble($input);

            //Assert
            $this->assertEquals(8, $result);
        }

        function testScrabbleDabbleMultiWord()
        {
            //Arrange
            $test_score = new Score;
            $input = 'Come back to me, Sheila';

            //Act
            $result = $test_score->scrabbleDabble($input);

            //Assert
            $this->assertEquals("Scrabble only accepts single-word entries that only contain alphabetical characters.", $result);
        }

        function testScrabbleDabbleNonAlpha()
        {
            //Arrange
            $test_score = new Score;
            $input = 'C0me b@ck to^me, Sheila!';

            //Act
            $result = $test_score->scrabbleDabble($input);

            //Assert
            $this->assertEquals("Scrabble only accepts single-word entries that only contain alphabetical characters.", $result);

        }
    }

?>
