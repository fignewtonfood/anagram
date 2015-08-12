<?php
    //establish Anagram class
    class Anagram
    {
        function compareWords($start_word, $checked_words)
        {
            $input_words = array();
            $array_of_words = array();
            $split_array =  array();
            $output_array = array();

            // // array_push($input_words, $master_word);
            // array_push($input_words, explode(',',$checked_words));
            //
            // print_r($input_words);
            // array_unshift ($input_words, $master_word);
            //
            // print_r($input_words);

            array_push($input_words, $start_word);
            $exploded_word_array = explode(',',$checked_words);

            foreach ($exploded_word_array as $exploded) {
                array_push($input_words, $exploded);
            }

            foreach ($input_words as $input) {
                $split_array = str_split($input);
                sort($split_array);
                array_push($array_of_words, $split_array);
            }

            $master_word = array_shift($array_of_words);

            $counter = -1;
            foreach ($array_of_words as $word) {
                ++$counter;
                if ($master_word == $word){
                    array_push ($output_array, $exploded_word_array[$counter]);
                } 
            }


            return $output_array;
        }
    }
?>
