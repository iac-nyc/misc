<?php

/*
 * strpos — Find the position of the first occurrence of a substring in a string
 *
 * needle:
 * The searched value.
 * Note:
 * If needle is a string, the comparison is done in a case-sensitive manner.
 *
 * haystack:
 * The array.
 *
 */

$phrase = "I only hit what I aim for";

$len = strlen($phrase);

$start = strpos($phrase, 'hit');

echo substr($phrase, $start);

?>