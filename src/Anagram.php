<?php
    //establish Anagram class
    class Anagram
    {
        function compareWords($input_words)
        {
            $first_word = $input_words[0];
            // echo $first_word;
            $second_word = $input_words[1];
            // echo $second_word;
            $first_array = str_split($first_word);
            // print_r($first_array);
            $second_array = str_split($second_word);
            // print_r($second_array);
            sort($first_array);
            // print_r($first_sort);
            sort($second_array);
            // print_r($second_sort);
            $output_array = array();

            if ($first_array == $second_array) {
                array_push ($output_array, true);
            } else {
                array_push ($output_array, false);
            }
            return $output_array;
        }
    }

?>
