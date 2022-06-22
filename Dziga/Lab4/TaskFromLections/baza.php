<?php
//-----------------------------------------------------------
$a = FALSE; // boolean
$b  = "loo"; // string
$c = 12; //int
$d = 1.234; // float

//-----------------------------------------------------------
echo '<-Variables-><br>';
echo gettype($a);//print type
echo "<br>";
echo gettype($b);//print type
echo "<br>";
echo gettype($c);//print type
echo "<br>";
echo gettype($d);//print type
echo "<br>";

//-----------------------------------------------------------
echo '<-Check Variables-><br>';
if (is_int($c)) {//checks variable for int
    $c -= 6;
}
echo "$c<br>";

if (is_string($b)) {//checks variable for string
    echo "String: $b";
}

echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo '<-Arrays-><br>';
$array_int = array(1, 2, 3); //int array
var_dump($array_int);

echo "<br>";
foreach ($array_int as $el) {
    echo $el . ' ';
}

echo "<br>";

$array_string = array("foo", "bar", "hallo", "world"); //string array
var_dump($array_string);
echo "<br>";

for($i = 0; $i < 4; $i++){
    echo $array_string[$i] . " ";
}

echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo '<-Multi-dimensional arrays-><br>';
$array = array( //multi-dimensional array + associated array
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);
var_dump($array); //shows info
echo "<br>";

echo $array["foo"];
echo "<br>";
echo $array[42];
echo "<br>";
var_dump($array["multi"]["dimensional"]["array"]);
echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo '<-Strings-><br>';
$string1 = "Hello World !";
$arr1 = explode(" ", $string1); //breaks string

echo "$string1<br>";
var_dump($arr1);
echo "<br>";

$array2 = ["Hello", "World", "!"];
$str2 = implode("->", $array2); //

print "$str2<br>";
echo "<br>";

//-----------------------------------------------------------
echo '<-Function-><br>';
function recursion($var) //recursion
{
    if ($var < 5) {
        echo "$var<br>";
        recursion($var + 1);
    }
}

$var = 0;
recursion($var);

echo "<br>";

//-----------------------------------------------------------
echo '<-OOP-><br>';
include_once "classes.php";
include_once "Singleton.php";

$objectWomen = new Women("Sonya", "21");
$objectMen = new Men("Denchik", "25");

$objectCouple = new Couple($objectWomen, $objectMen);

$info = $objectCouple->getInfo();

echo $info;
echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo '<-Singleton-><br>';
$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

if ($s1 === $s2)
    echo "Ok!";
else
    echo "Error!";
