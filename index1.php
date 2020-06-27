<?php

function generateStory($singular_noun,$verb,$color,$distance_unit){
    $story = "\nThe ${singular_noun} are lovely, ${color}, and deep.\n
    But I have promises to keep,\n
    And ${distance_unit} to go before I ${verb},\n
    And ${distance_unit} to go before I ${verb}\n";
    return $story;
}

echo generateStory("dog","eat","purple","miles");
echo generateStory("car","cook","vermilion","inches");
echo generateStory("empty void","speak","beige","feet");

?>


