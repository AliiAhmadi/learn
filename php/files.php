<?php
// working with files in php


### file_exists() function check if a file exist or not

if(file_exists("this.txt")){
    echo "Exist";
}else {
    echo "Not exist";
}

### is_file() function

### is_dir()

### mkdir() for create an directory

### unlink() for deletion

if(file_exists("index.html")){
    unlink("index.html");
}else{
    echo "File not found";
}

### fopen() & fcloze() , fwrite()

?>