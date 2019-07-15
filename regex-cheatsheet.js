//CREATING REGEX PATTERN

let pattern = /\d+[a-z]+/gim; // pattern is not a string, / are the only possible delimiters

/********FLAGS (aka modifiers) ********
 are placed either after the ending / or as the second argument of the RegExp constructor.

 
    g - Global search.
    i - Case-insensitive search.
    m - Multi-line search.
    s - Allows . to match newline characters.
    u - "unicode"; treat a pattern as a sequence of unicode code points
    y - Perform a "sticky" search that matches starting at the current position in the target string. See sticky
*/

/*************JS functions that work with regex *************** 
 
    exec- A RegExp method that executes a search for a match in a string. It returns an array of information or null on a mismatch.
    test - A RegExp method that tests for a match in a string. It returns true or false.
    match - A String method that executes a search for a match in a string. It returns an array of information or null on a mismatch.
    matchAll - A String method that returns an iterator containing all of the matches, including capturing groups.
    search - A String method that tests for a match in a string. It returns the index of the match, or -1 if the search fails.
    replace - A String method that executes a search for a match in a string, and replaces the matched substring with a replacement substring.
    split - A String method that uses a regular expression or a fixed string to break a string into an array of substrings.

*/

let pattern = /\d+[a-z]+/i;

let string = "123foo";

// either exec on the pattern

let result1 = pattern.exec(string);

// or match on the string

let result2 = string.match(pattern);
