<?php
 
//Numbers data type
$wholeNumber = 12345;
echo $wholeNumber;

echo "<br>";
var_dump($wholeNumber);
echo "<br>";


//Float in PHP
$floatNumber = 3.142;
echo $floatNumber;

echo "<br>";

//String 
$userName = "Jackie Mollie";
echo $userName;
echo "<br>";
var_dump($userName);
echo "<br>";


//Boolean
$isTrue = true;
echo $isTrue;
echo "<br>";
var_dump($isTrue);
echo "<br>";

$isFalse = false;
echo $isFalse;
echo "<br>";
var_dump($isFalse);
echo "<br>";

//Array (List)
$fruits = ["apple", "banana", "mango", "guava"];
print_r($fruits);
echo "<br>";

$names = array("Mary", "John", "Juliet");
print_r($names);

echo "<br>";

$string = "A, B, C";
echo $string;

echo "<br>";

$strArr = explode(",",$string);
print_r($strArr);
echo "<br>";


//Std Object
$student = new stdClass();
$student->name = "Mary Johns";
$student->course = "BSc. Software Engineering";
$student->university = "Information And Communications University";
$student->age = 200;

echo "<pre>";
print_r($student);
echo "</pre>";
echo "<br>";

//null
$school = null;
echo $school;


//resource
// $con = new mysqli("localhost","mob","","");
$image = "https://images.unsplash.com/photo-1750263160599-53c7974bc79d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDF8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxfHx8ZW58MHx8fHx8";


//Class and object
class Person {
    private $_name = "John";
    private $_age = 200;

    public function talk(){
        echo "John is talking<br>";
    }
    public function walk(){
        echo "John is walking";
    }
}

$john = new Person();
$john->talk();
$john->walk();


//Functions
function sum($a, $b){
    $sum = $a + $b;
    echo "<br>".$sum. "<br>";
}

sum(10,10);
sum(20,20);
sum(100,100);
?>