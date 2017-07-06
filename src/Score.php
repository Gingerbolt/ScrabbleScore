<?php
    class Score
    {
        function validate($input) {
            $validate = false;
            if (ctype_alpha($input) == true) {
              $validate = true;
            }
            return $validate;
        }

        function scrabbleDabble($input)
        {
            $validate = $this->validate($input);
            $input = strtoupper($input);
            $num_arr = [];
            $letter_arr = str_split($input);

            if ($validate == false) {
                $output = 'Scrabble only accepts single-word entries that only contain alphabetical characters.';
                return $output;
            } else {
                foreach ($letter_arr as $letter) {
                    if ($letter == 'A' || $letter == 'E' || $letter == 'I' ||
                    $letter == 'O' || $letter == 'U' || $letter == 'L' || $letter == 'N' || $letter == 'R' || $letter == 'S' || $letter == 'T') {
                        array_push($num_arr, 1);
                    } elseif ($letter == 'D' || $letter == 'G') {
                        array_push($num_arr, 2);
                    } elseif ($letter == 'B' || $letter == 'C' || $letter == 'M' || $letter == 'P') {
                        array_push($num_arr, 3);
                    } elseif ($letter == 'F' || $letter == 'H' || $letter == 'V' || $letter == 'W' || $letter == 'Y') {
                        array_push($num_arr, 4);
                    } elseif ($letter == 'K') {
                        array_push($num_arr, 5);
                    } elseif ($letter == 'J' || $letter == 'X') {
                        array_push($num_arr, 8);
                    } elseif ($letter == 'Q' || $letter == 'Z') {
                        array_push($num_arr, 10);
                    }
                }

                $output = array_sum($num_arr);
                return $output;
            }
        }
    }
?>
