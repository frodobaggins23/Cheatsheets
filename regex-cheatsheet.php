<?php

/******* PREG MATCH ********/

$result = preg_match($pattern, $string, $matches);
// finds if $string matches $pattern and if so, puts it's parts into $matches
// last param is optional, the function returns boolean

if (preg_match('#^[\da-zA-Z_\-]+$#',$string)) {
 
    $results[] = $string;

}

/*
preg_match
    checks if a given string matches a given pattern
preg_match_all
    performs matching globally across the entire string and returns all the matches
preg_replace
    replaces parts of a string that match a given pattern
preg_split
    splits a given string by a given pattern 
*/

/*****REGEX PARAMS ******/

/*
    DELIMITERS (to wrap regex with): #, @, ~ or /


    \s - any whitespace
    \w - "word characters" - letters, numbers, or underscore
    \d - any number
    . - any one character
    [abc] - one of the letters a, b or c
    [^abc] - anything but one the letters a, b or c
    [a-z] - lowercase letters a-z
    [A-Z] - lowercase letters A-Z
    [a-zA-Z0-9_] - lowercase letters a-z, uppercase letters A-Z, numbers 0-9 and underscores - equivalent to \w
    ^ - beginning of the string
    $ - end of the string
    \- - a literal - (a special symbol so it has to be escaped)


    
    + - one or more of the specified characters
    * - zero or more of the specified characters
    ? - zero or one of the specified character
    {2} - exactly 2 of the specified characters
    {1,4} - between 1 and 4 of the specified characters

    MODIFIERS:
    
    i - case insensitive matching
    m - start of the line ^ and end of the line $ match any newline, not just start and end of entire string
    s - the dot . matches also newlines
    x - whitespace is ignored
    u - string is treated as UTF-8 multibyte safe


    */

    /******* Eager vs. lazy quantifiers  ***********/
    //When appending ? after the quantifier we switch to lazy mode where the minimal string that matches the pattern will be matched:
    preg_match('#<.*>#', '<h1>Headline</h1>', $matches); // matches the entire string
    preg_match('#<.*?>#', '<h1>Headline</h1>', $matches); // matches just <h1>


    /******* SPLITING STRING *******/

    $words = explode('-', 'product-name-as-a-slug');