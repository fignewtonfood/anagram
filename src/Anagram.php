<?php
    //establish Anagram class
    class Anagram
    {
        function compareWords($input_words)
        {
            if ($input_words[0] == $input_words[1]) {
                return true;
            } else {
                return false;
            }
        }
    }

?>
