<?php

// working with strings in php

### is_string() function return an boolean value 

var_dump(is_string(1));

### strlen() function return length of the string

var_dump(strlen("ALiAhmadi"));

### lcfirst() function will return an string that first character converted to lowercase 

var_dump(lcfirst("ALI"));

var_dump(ucfirst("ali"));


### ucwords()

var_dump(ucwords("i am from iran"));


### strtoupper() & strtolower()

var_dump(strtolower("ALI"));


### trim() for delete whitespaces in start and end of an string
    // ltrim() & rtrim()

$str = "     this text have whitespace in start and end     ";
var_dump(trim($str));


### nl2br() -> convert newline in code to <br> in html

var_dump("hello\nwellcome");

### number_format() function

//

### explode() function

print_r(explode("/", "ali/zaynab")); // convert this string to an array base on seprator

### implode() function can use for convert an array to string

### substr() function 

var_dump(substr("this is world", 5, 4));

### strstr() function

### str_replace() 

### str_repeat() => repeat and concat string to each other

var_dump(str_repeat("Ali", 5));

### str_shuffle() 

var_dump(str_shuffle("ahmadi"));

?>