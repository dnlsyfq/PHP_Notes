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

## Array 

```
$my_array = array(0, 1, 2);

$mixed_array = array(1, "chicken", 78.2, "bubbles are crazy!");
```

* get no. of element in array 
```
echo count($my_array); // Prints: 3
echo count($string_array); // Prints: 2
echo count($mixed_array); // Prints: 4
```
### Arrays with Short Syntax

```
$number_array = [0, 1, 2];
```

* print array
```
print_r($number_array);
```

* print array element only in string 
```
echo implode(", ", $number_array);
```

* indexing array element
```
$my_array = ["tic", "tac", "toe"];

echo $my_array[1]; // Prints: tac
```

* adding element in array
```
$string_array = ["first element", "second element"];

$string_array[] = "third element";

echo implode(", ", $string_array); 
// Prints: first element, second element, third element 
```

* reassign element in array
```
$string_array = ["first element", "second element", "third element"];

$string_array[0] = "NEW! different first element";

echo $string_array[0]; // Prints: NEW! different first element"
```

* array methods : array_pop()
takes an array as its argument. It removes the last element of an array and returns the removed element.

```
$my_array = ["tic", "tac", "toe"];
array_pop($my_array); 
// $my_array is now ["tic", "tac"]

$popped = array_pop($my_array); 
// $popped is "tac"
// $my_array is now ["tic"]

```

* array methods : array_push()
takes an array as its first argument. The arguments that follow are elements to be added to the end of the array. array_push() adds each of the elements to the array and returns the new number of elements in the array.

```
$new_array = ["eeny"];
$num_added = array_push($new_array, "meeny", "miny", "moe"); 
echo $num_added; // Prints: 4
echo implode(", ", $new_array); // Prints: eeny, meeny, miny, moe 
```

* array methods : array_shift()
removes the first element of an array and returns that value. Each of the elements in the array will be shifted down an index.
```
$adjectives = ["bad", "good", "great", "fantastic"];
$removed = array_shift($adjectives); 
echo $removed; //Prints: bad
echo implode(", ", $adjectives); // Prints: good, great, fantastic 
```
* array methods : array_unshift
takes an array as its first argument. The arguments that follow are elements to be added to the beginning of the array. It returns the new number of elements in the array.
```
$foods = ["pizza", "crackers", "apples", "carrots"];
$arr_len = array_unshift($foods, "pasta", "meatballs", "lettuce"); 
echo $arr_len; //Prints: 7
echo implode(", ", $foods); 
// Prints: pasta, meatballs, lettuce, pizza, crackers, apples, carrots
```

### Nested Array 

* indexing 
```
$nested_arr = [[2, 4], [3, 9], [4, 16]];
$first_el = $nested_arr[0][0];
echo $first_el; // Prints: 2
```

### Associative Array 
* Associative arrays are collections of key=>value pairs
* key in Associative array can be string or interger
* values can be any type
* => operator to associate key with its value 
```
// short array syntax
$my_array = ["panda" => "very cute", "lizard" => "cute", "cockroach" => "not very cute"];


// array 
$about_me = array(
    "fullname" => "Aisle Nevertell",
    "social" => 123456789
);
```

* indexing elements in Assc Array
```
$my_array = ["panda"=>"very cute", "lizard"=>"cute", "cockroach"=>"not very cute"];
echo $my_array["panda"]; // Prints: very cute
```

* add elements in Assc Array 
```
$my_array["capybara"] = "cutest";
echo $my_array["capybara"]; // Prints: cutest
```


* expr in Assc Array 
```
$favorites = ["favorite_food"=>"pizza", "favorite_place"=>"my dreams", "FAVORITE_CASE"=>"CAPS","favorite_person"=>"myself"];

echo  $favorites["favorite" . "_" . "food"]; 
// Prints: pizza

$key =  "favorite_place";
echo  $favorites[$key];  
// Prints: my dreams

echo $favorites[strtoupper("favorite_case")];
// Prints: CAPS
```

* adding new element in Assc Array 
```
$new_arr = ["first" => "I am first!", "second" => "I am second!"]; 

$new_arr["third"] = "I am third!";

echo $new_arr["third"]; // Prints: I am third!

$new_arr["third"] = "I am the *NEW* third!";

echo $new_arr["third"]; // Prints: I am the *NEW* third!
```

* removing element in Assc Array with unset()
```
$nums = ["one" => 1,"two"=> 2];

echo implode(", ", $nums); // Prints: 1, 2

unset($nums["one"]);

echo implode(", ", $nums); // Prints: 2
```

* adding new element without specifying key
The first element is associated with the key 0, the second with 1, and so on. But ordered arrays are still the same structure as associative arrays.

When we add an element to an array without specifying a key (e.g. using array_push()), PHP will associate it with the “next” integer key. If no integer keys have been used, it will associate it with the key 0, otherwise it will associate it one more than the largest integer used thus far. 


```
$num_array = [1000 => "one thousand", 100 => "one hundred", 600 => "six hundred"];
$num_array[] = "New Element in \$num_array";
echo $num_array[1001]; // Prints: New Element in $num_array

$animals_array = ["panda"=>"very cute", "lizard"=>"cute", "cockroach"=>"not very cute"];
array_push($animals_array, "New Element in \$animals_array");
echo $animals_array[0]; // Prints: New Element in $animals_array
```

### Joining Arrays 
* combine arrays. The union (+) operator takes two array operands and returns a new array with any unique keys from the second array appended to the first array

```
// since "lizard" is not a unique key, $animal_rankings["lizard"] will retain the value of $my_array["lizard"] (which is "cute").

$my_array = ["panda" => "very cute", "lizard" => "cute", "cockroach" => "not very cute"];
$more_rankings = ["capybara" => "cutest", "lizard" => "not cute", "dog" => "max cuteness"];
$animal_rankings = $my_array + $more_rankings;
```
### Assign by Value or Reference

```
$favorites = ["food"=>"pizza", "person"=>"myself", "dog"=>"Tadpole"];
$copy = $favorites;
$alias =& $favorites;
$favorites["food"] = "NEW!";

echo $favorites["food"]; // Prints: NEW!
echo $copy["food"]; // Prints: pizza
echo $alias["food"]; // Prints: NEW!
```


```
function reallyChangeColor (&$arr) 
{
  $arr["color"] = "red";    
}
$object = ["shape"=>"square", "size"=>"small", "color"=>"green"];
reallyChangeColor ($object);
echo $object["color"]; // Prints: red
```
