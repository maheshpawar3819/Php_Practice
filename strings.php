<?php 
   $str="mahesh pawar";
//    $stringLength=strlen($str);

//    echo $stringLength;
    //string concat
    // echo "my name is ".$str." pawar";

    // count worlds 
    // echo str_word_count($str);

    // reverse string 
    // echo strrev($str);

    //search the word
    $random="Lorem ipsum dolor sit amet consectetur adipisicing elit. Error totam modi cum, architecto explicabo officia. Provident adipisci magni id sunt laborum, mollitia doloribus eaque, minus, magnam doloremque in. At, doloribus?";

    // give the postion of the given stirng 
    echo strpos($random,"cum");

    //replace sting
    echo 'the replace string is : '.str_replace('mahesh','mahi',$str);
?>