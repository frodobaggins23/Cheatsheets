<?php 

/*
********** Prepare PHP environment****************
1 - https://bitnami.com/stack/wamp/installer
2 - Apache configuration
[AMPstack installation]/apache2/conf/httpd.conf
[AMPstack installation]/apache2/conf/extra/httpd-vhosts.conf
3 - xdebug for nicer var_dump output
https://xdebug.org/wizard.php
*/


/*** ARRAYS ***/

$fruit = [
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
];
//accessing
$fruit_colors['Pear'];

//adding
$fruit['green_one'] = 'Pear';
$fruit[] = "Apple";


/*** TERNARY OPERATOR ***/

//full:
$owns_a_car = false;
echo 'He goes to work by ' . ($owns_a_car ? 'car' : 'bicycle');
//short version:
$username = null;
echo 'Hello' . ($username ?: 'unknown person');

/**** Importing variable from global scope to function ***/

$my_variable = 123;
function foo()
{
    global $my_variable;
}

/*** SWITCH ***/

switch (expression) {

    case value_1:
        // code to run when value == value_1
        break; // mandatory

    case value_2:
    // ...
    default:

        // code to run when none of the previous conditions are true
        break;
}

/*** LOOPS ***/

for ($number = 0; $number < 10; $number++) {

    if ($number == 5) {
        break; // will stop the loop when $number reaches 5
        continue; // this will end the current iteration and continue to the next
    }

}

/*** FOREACH ***/

foreach ($fruit as $one_fruit) {
    echo $one_fruit;
}

foreach ($fruit_colors as $fruit_name => $fruit_color) {
    echo 'The color of '.$fruit_name.' is '.$fruit_color;
}

/*** INLINE PHP ***/
?>
<h2>Example 1</h2>
<?php if ($condition == true) : ?>
    <p>
        My <strong>HTML</strong> code.
    </p>

<?php endif; ?>

<h2>Example 2</h2>
<?php for ($i = 0; $i < 10; $i++) : ?>
    <div>
        This is item <?php echo $i+1; ?> of 10
    </div>
<?php endfor; ?>

<h2>Example 3</h2>
<?php if ($a==1) :?>
    <h1>A is equal 1</h1>
    <?php if($ab==2) :?>
    <h2>not only that but AB is also equal to 2</h2>
    <?php endif; ?>
<?php elseif ($b==2) :?>
<h1>A might not be equal to 1 but B is equal to 2</h1>
<?php else :?>
<p>or else ... this is just bullshit</p>
<?php endif; ?>

<h2>Example 4</h2>
<?php foreach ($names as $nr => $name) : ?>
    <div>
        <?php echo $nr.'. '.$name; ?>
    </div>
<?php endforeach; ?>

<?php

/*** REDIRECTION ***/

header('Location: /some/other/url.php');

/*** PASSING BY REFERENCE ***/

$a = 123;

$b = $a; // b is passed by value. basically creating copy of the value of $a

$c = &$a; //c is passed by reference, it is pointing to the value of a. If $a values is changed, $c changes as well. If $a is deleted, $c still contains this value 

//USING REFERENCE PASSING FOR ADDING INTO ARRAYS

function add_item (&$array,$item) {
    //if I would not be passing as reference to existing array, it would always create a copy of array and return only one item in there. While passing function argument as reference to an array, every time the function runs it add one more element into that one array
        $array[]=$item;
        var_dump($array);
    }


/*** DEFAULT FUNCTION VALUES ***/

function headline($text, $importance = 1)
{
    return "<h{$importance}>{$text}</h{$importance}>"; // <h1>TEXT</h1>
}

/*** OBJECT ORIENTED PHP ***/

class Father

{
    protected $pin_number = null;

    public function getPinNumber()
    {
        return $this->pin_number;
    }

}

class Dog

{

   public $color = 'unspecified';
   public function __construct()  //this is triggered when object is build
    {
        static::$nr_of_dogs++;  //you do not use $this but static:: for static properties
    }

    public static $nr_of_dogs = 0; // static property - global counter of dogs

    public static function getNrOfDogs()

    {

        return static::$nr_of_dogs;

    }

}

 

$my_dog = new Dog(); // dog::$nr_of_dogs increased by 1


// (because they're public I can access the static property and method from anywhere)

echo Dog::$nr_of_dogs; // static property

echo Dog::getNrOfDogs(); // static method

echo $my_dog::$nr_of_dogs; // property using the object

echo $my_dog::getNrOfDogs(); // method using the object


class Retriever extends Dog

{
    public $color = 'golden'; // own default value of $color property
    public function play_dead() // extra method that basic dog doesn't have
    {
        echo '*looks dead*';
    }

}

//Calling static properties or methods:

//from anywhere using the name of the class (if the property / method is public)
class_name::$property; class_name::method();

//from anywhere using an object of the class (if the property / method is public) 
$object::$property; $object::method();

//from inside the class' methods
static::$property; static::method(); self::$property; self::method();

//Magic Methods
echo 'http://php.net/manual/en/language.oop5.magic.php';

//Property visiblity

echo '
public = allows access from anywhere in the code without restriction
protected = allows access only from within the same class (object) or from object of an extending class
private = allows access only from within the same class (object)'; 



/*** SESSIONS ***/

session_start();
$_SESSION['user'] = 'Kevin';

/*** NAMESPACES ***/
namespace foo;
    $object = new bar\Baz();
namespace foo\bar;
    $object = new Baz();

use foo\Bar as Bar; // from now on I can use the class Bar only by the name 'Bar'
