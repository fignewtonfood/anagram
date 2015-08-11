<?php
    //establish Anagram class
    class Anagram
    {
        function compareWords($input_words)
        {
            $array_of_words = array();
            $split_array =  array();
            $output_array = array();

            foreach ($input_words as $input) {
                $split_array = str_split($input);
                sort($split_array);
                array_push($array_of_words, $split_array);
            }

            $count = count($array_of_words);

            $master_word = array_shift($array_of_words);

            foreach ($array_of_words as $word) {
                if ($master_word == $word){
                    array_push ($output_array, true);
                } else {
                    array_push ($output_array, false);
                }
            }
            return $output_array;
        }
    }

?>
