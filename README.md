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