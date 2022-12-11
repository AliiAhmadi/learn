<?php

function show($value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}


// Array functions
$arr = [
    "user1" => "ali",
    "user2" => "reza",
    "user3" => "zaynab"
];
### count()

show(count($arr));

### sizeof() function

### array_keys => return an array contain keys of the array we passed it.

show(array_keys($arr));

### array_values() function

### array_key_exists()

if(array_key_exists("user1", $arr)){
    echo "Exist !";
}

### in_array() like array_key_exists() just for values not keys

if(in_array("zaynab", $arr)){
    echo "Value Exist !";
}

### is_array()

### shuffle() function -> when you shuffle an array, all of keys will disappear

shuffle($arr);
show($arr);

### sort() function

sort($arr);

### max() => return largest number in array
### min() => return smallest number in array
### end() => return the value of latest member of array

### array_sum() => return the sum of all members in array

echo array_sum([1, 2, 3, 4, 5]);

### array_rand() => return randomly one key of array

echo array_rand($arr);





?>