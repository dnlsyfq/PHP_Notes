# PHP

## Introduction
PHP is a general-purpose scripting language widely 
used as a server-side language for creating dynamic web pages.

* Created in 1994
* Functionality for interacting with web data, Vanilla PHP, or PHP without any other tools, can be used on its own to create web application back-ends. 
* Provides the underlying code for content management systems (CMS) (*CMS allows users to create and update their own websites without having to write a lot of complex code themselves.*)
    * Wordpress
    * Joomla
    * Drupal
* E-Commerce
    * Magento
    * Woo Commerce
* Frameworks
    * Laravel
    * CakePHP
    * Symfony        
    
* Dynamic web pages. A dynamic web page is one where each visitor to the website gets a customized page that can look different than how the site looks to another visitor. (*contrast to static web pages which provide the same content to each visitor.*)

<img src='image/php_static_dynamic.svg'>



### Example PHP

* With HTML
```
<p>This HTML will get delivered as is </p>
<?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>"
    ;?>
```

* No HTML
```
<?php 
echo "Hello World";
?>
```

### String 

```
echo "Hello World"
```

* String List
```
echo "1. List";
echo "\n2. List;
```

* String Concatenation
```
echo "one"."two";
echo "one"." "."two";
```



### Variables

```
$variable_name = "value";
```
```
$dog_name = "Tadpole";
echo $dog_name; 

echo "I have a $color dog named $dog_name and her favorite food is $favorite_food.";

echo "I have a ${color}ish dog named $dog_name and her favorite food is ${favorite_food}s.";
```

* String concatenation with variables
```
 echo "\nI have always been obsessed with ${noun}s. I'm 
 ${adjective}ish. I'm always ${verb}ing.";

```
```
$full_name = "Aisle";
$full_name .= " Nevertell";
echo $full_name;
```

* copying variables
This new variable holds a copy of the value held by the original variable, but it’s an independent entity; changes made to either variable won’t affect the other:

```
$first_player_rank = "Beginner"; 
$second_player_rank = $first_player_rank; 
echo $second_player_rank; // Prints: Beginner

$first_player_rank = "Intermediate"; // Reassign the value of $first_player_rank
echo $second_player_rank; // Still Prints: Beginner
```

* replicate variables
create a new name which points to the same spot in memory.

```
$first_player_rank = "Beginner";
$second_player_rank =& $first_player_rank; 
echo $second_player_rank; // Prints: Beginner

$first_player_rank = "Intermediate"; // Reassign the value of $first_player_rank
echo $second_player_rank; // Prints: Intermediate
```
### Numbers 

```
echo 5 + 1; // Prints: 6
echo 6.6 + 1.2; // Prints: 7.8
echo 198263 - 263;  // Prints: 198000
echo -22.8 - 19.1;
```

### Functions 

```
function greetLearner()
{
  echo "Hello, Learner!\n";
  echo "I hope you're enjoying PHP!\n";
  echo "Love, Codecademy";
}
```

* Return Statement
Once the first return statement is executed, the function is exited.
```
function countdown() 
{
  echo "4, 3, 2, 1, ";
  return "blastoff!";
}

countdown() // prints "4, 3, 2, 1. "
```

```
function countdown() 
{
  echo "4, 3, 2, 1, ";
  return "blastoff!";
}

$return_value = countdown(); // Prints: 4, 3, 2, 1, 
echo $return_value; // Prints: blastoff!
```

* Return Statement before echo
As soon as the return statement is reached, the function will end
```
function announceRunning2()
{
  return "This is the return value of the second function.";
  echo "P.S., I love you";
}

$second_result = announceRunning2();
echo $second_result; // This is the return value of the second function.
```

* Return NUll 
functions without return statements? Any function without a return returns a special value NULL. NULL is a special data type that stands for the absence of a value.

```
function returnNothing() 
{
  echo "I'm running! I'm running!\n";
}

$result = returnNothing(); // Prints: I'm running! I'm running!

echo $result; // Nothing is printed

```

NULL can sometimes act like 0 

```
echo NULL * 3; // Prints: 0

echo NULL . "!"; // Prints: !
```

### functions and parameter 

```
function sayCustomHello($name)
{
echo "Hello, $name!";
};

sayCustomHello("Aisle Nevertell"); // Prints: Hello, Aisle Nevertell!

sayCustomHello("Codecademy learner"); // Prints: Hello, Codecademy Learner!
```

```
function returnFive()
{
  return 5;
}

function addTwoToNum($num)
{
  return $num + 2;
}

echo addTwoToNum(returnFive()); // Prints: 7
```

### function and multi parameters 

```
function divide($num_one, $num_two)
{
  return $num_one / $num_two;
};

echo divide(12, 3); // Prints: 4

echo divide(3, 12); // Prints: 0.25
```

### default oarameter 

```
function greetFriend($name = "old chum")
{
  echo "Hello, $name!";
};

greetFriend("Marvin"); // Prints: Hello, Marvin!

greetFriend(); // Prints: Hello, old chum!
```

### pass parameter

```
function addX ($param)
{
  $param = $param . "X";
  echo $param;
};
$word = "Hello";
addX($word); // Prints: HelloX
echo $word; // Prints: Hello
``` 

* make permanent changes
```
function addXPermanently (&$param)
{
  $param = $param . "X";
  echo $param;
};
$word = "Hello";
addXPermanently($word); // Prints: HelloX
echo $word; // Prints: HelloX
```

```
<?php

$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

// Write your code below:

function convertToQuestion(&$str){
  $str = "Do you think ".$str."?\n";
}

convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);
// function convertToQuestion(&$str)
// {
//   $str = "Do you think " . $str . "?\n";
// }

echo $string_one;
echo $string_two;
echo $string_three;
```
### Variable Scope 

```
$feed_quantity = 300;
function calculateDaysLeft($number, $rate)
{
  global $feed_quantity;
  $result = $feed_quantity / ($number * $rate);
  return $result;
}
echo calculateDaysLeft(2, 120);
```

## Built-in PHP functions

* gettype()
returns a string value representing the data type of the argument
```
$name = "Aisle Nevertell";
$age = 1000000;

echo gettype($name); // Prints: string

echo gettype($age); // Prints: integer
```

* var_dump()
prints details about the argument it receives
```
var_dump($name); // Prints: string(15) "Aisle Nevertell"

var_dump($age); // Prints: int(1000000)
```

* string 
   * strrev()
   ```
   echo strrev("Hello, World!"); // Prints: !dlroW ,olleH
   ```
   
   * strtolower()
   ```
   echo strtolower("HeLLo"); // Prints: hello
   ```

   * str_repeat()
   ```
   echo str_repeat("hi", 10);
   ```

   * substr_count()
   ```
   echo substr_count($story, "like"); // Prints: 8
   ```
   
* numbers
   * abs()
   ```
   echo abs(-10.99);
   ```
   
   * round()
   ```
   echo round(1.2);;
   ```

   * getrandmax() , rand()
      * Invoking rand() with no arguments will return a number between 0 and the largest number our current environment will allow.
      * find out what this number is by invoking a different built-in function, getrandmax()
   ```
   $max = getrandmax(); 

   echo $max;

   echo rand(); // Prints a number between 0 and $max
   
   
   # rand() function, however is somewhat flexible.
   
   echo rand(1, 2); // Prints either 1 or 2

   echo rand(5, 10); // Prints a number between 5 and 10 (inclusive!)

   echo rand(1, 100); // Prints a number between 1 and 100 (inclusive!)
   
   ```

* Documentation
abs() has the type mixed because there are multiple data types the function will accept (an integer or a float).
The parameter for abs() is named $number. After the parentheses is a colon (:) followed by number; this is the data type the function will return.

```
abs ( mixed $number ) : number
```

```
substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] ) : int

```
```
str_pad ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] ) : string


$a = 29;
$b = "You did it!";
$c = STR_PAD_BOTH;
$d = "*~*";

echo str_pad($b, $a, $d, $c);
```

