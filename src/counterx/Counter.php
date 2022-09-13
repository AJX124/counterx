<?php
/**
 * Created by AJAY G.
 * Date: 13/09/2022
 * Time: 20:40
 */

namespace counterx;


class Counter
{
    /**
     * @param string $text The text we want to count the number of words it consist of
     * @return int The number of words in text
     */
    public static function countWords(string $text){
        /** @var int $count To store the result of counting words in text */
        $count = 0;
        //Clean up the string
        $text = trim($text);
        /** @var array $words Array containing the words */
        $words = explode(" ", $text);
        //Array size is the number of words in text
        $count = sizeof($words);
        return $count;
    }
}