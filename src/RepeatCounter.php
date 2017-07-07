<?php
    class RepeatCounter
    {
        function countRepeats($word_to_count, $string_to_use)
        {
            if (is_int($word_to_count)) {
                return "Please enter words";
            }

            $word_to_count = strtolower($word_to_count);
            $string_to_use = strtolower($string_to_use);
            $string_to_use = explode(" ", $string_to_use);
            $counter = 0;

            foreach($string_to_use as $word) {
                if ($word_to_count == $word) {
                    $counter += 1;
                }
            }
            return "count: " . strval($counter);
        }
    }





 ?>
