

```
    for($i=51;$i <= 100;$i++){
      echo $i.'<br>';
    }
    
```

```
$i = 1;
while($i <= 100){
  echo $i;
  $i ++;
}
```

### foreach loop

iterates over an indexed array or associative array in order from the first value. You can retrieve values in arrays one by one

```
$towns = array('Tokyo','London','New York');

foreach($towns as $town){
    echo $town.'';
}

```

**Associative Array**

```
foreach($array as $key => $value){
    echo $key.':'.$value.' ' ;
}
```

### function

**string function**
    * strlen(str)
    
**array function**
    * count(array)
    
**math function**
    * rand(x,y)
    
### create function


```
function circleArea($radius){
    echo $radius*$radius*3.14;
}
```

