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

### array_chunk()

show(array_chunk($arr, 2));

### array_merge() => pass two array and add them to each other and create an array

show(array_merge([1, 2, 3], [4, 5, 6]));

### array_unique()

show(array_unique([1, 1, 1, 1, 1])); // result will be [1]

### array_reverse() function

echo array_search("ali", [
    "name" => "ali",
    "family" => "ahmadi",
    "age" => 20
]); // result = "name"

### array_diff() function

### array_slice() function

### array_splice() function
$firstArray = [1, 2, 3, 4, 5];
$SecondArray = [6, 7, 8, 9, 10];
array_splice($firstArray, 1, 0, $SecondArray);
show($firstArray);

### array_shift() => delete first item from an array and return it.
### array_unshift() => add one item in index 0 
### array_push() => add items at the end of array
### array_pop() => remove last item from array


### array_fill(firstIndex, NumberOfElements, Value)

show(array_fill(2, 4, "Ali"));


### array_filter() function

$result = array_filter([1, 2, 3, 4, 5], function ($value){
    return $value % 2 == 0;
});

show($result);


### compact() function


$num1 = 10;
$num2 = 30;
$num3 = 80;

$result = compact("num1", "num2", "num3");

show($result);

### extract() function

extract([
    "name" => "ali",
    "family" => "ahmadi",
    "age" => 20
]);

/*
    # the result of above code like this:
        $name = "ali";
        $family = "ahmadi";
        $age = 20;
*/



?>