<?php
    class Score
    {
        function scrabbleDabble($input)
        {
            $num_arr = [];
            $letter_arr = str_split($input);

            foreach ($letter_arr as $letter) {
                if ($letter == 'K') {
                    array_push($num_arr, 5);
                }
            }

            $output = array_sum($num_arr);
            return $output;
        }
    }
?>
