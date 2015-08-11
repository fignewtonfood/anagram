<?php
    //establish Anagram class
    class Anagram
    {
        function compareWords($input_words)
        {
            $array_of_words = array();

            $split_array =  array();

            foreach ($input_words as $input) {
                $split_array = str_split($input);
                sort($split_array);
                array_push($array_of_words, $split_array);
            }

            foreach ($array_of_words as $ordered_word) {
                if ($ordered_word=>[] != 0) {
                    if ($words[0] == $words)
                }
            }

            if ($first_array == $second_array) {
                array_push ($output_array, true);
            } else {
                array_push ($output_array, false);
            }
            return $output_array;
        }
    }

?>
