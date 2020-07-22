<?php

print_r('JSON_Encode - PHP variables to JSON' . '<br>');

$arr = array('a' => 1, 'b' => 2);

echo json_encode($arr);

print_r('<br>' . 'PHP String to JSON Example' . '<br>');
$my_string = "Hello World!";

echo json_encode($my_string);

print_r('<br>' . 'Putting it all together
' . '<br>');
// MyClass.php


class MyClass {

}


class Library {

}


class Book {

}


$book1 = new Book();

$book1->id = 101;

$book1->label = "Lorem ipsum";


$book2 = new Book();

$book2->id = 102;

$book2->label = "Dolor sir amet";


$books = array($book1, $book2);


$library = new Library();

$library->books = $books;


$myClass = new MyClass();

$myClass->library = $library;


$jsonData = json_encode($myClass);

echo $jsonData."\n";