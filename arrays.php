<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/

$names = [
    "cucumber",
    "rice",
    "spinach",
    "yakult"
];

$counter = 0;

while ($counter < sizeof($names)){
    
    echo $names[$counter] . "<br>";
    $counter++;
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

$counter = 0;

while ($counter < sizeof($names)){
    
    echo "<li>" . $names[$counter] . "</li>";
    $counter++;
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

$food_assoc = [
    "cucumber" => "salad",
    "rice" => "main course",
    "spinach" => "salad",
    "yakult" => "dessert"
];

$counter = 0;

while ($counter < sizeof($names)){
    
    echo $names[$counter] . " | " . $food_assoc[$names[$counter]] . "<br>";
    $counter++;
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$origin = [
    "cucumber" => "Italy",
    "rice" => "China",
    "spinach" => "Spain",
    "yakult" => "Japan"
];

$counter = 0;

while ($counter < sizeof($names)){
    
    echo $names[$counter] . " | " . $food_assoc[$names[$counter]] . " | " . $origin[$names[$counter]] . "<br>";
    $counter++;
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/


?>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: left;
    }
    #color {
        background-color: lightgray;
    }
    
</style>
<table>
  <tr>
    <th>names</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>
      <?php 
        echo $names[0];
        ?>
    </td>
    <td>
       <?php
        echo $food_assoc[$names[0]];
        ?>
    </td>
    <td> 
       <?php
        echo $origin[$names[0]];
        ?>
    </td>
  </tr>
  
   <tr>
    <td>
       <?php
        echo $names[1];
        ?>
    </td>
    <td>
       <?php
        echo $food_assoc[$names[1]];
        ?>
    </td>
    <td>
       <?php
        echo $origin[$names[1]];
        ?>
    </td>
  </tr>
  
   <tr>
    <td>
       <?php
        echo $names[2];
        ?>
    </td>
    <td>
       <?php
        echo $food_assoc[$names[2]];
        ?>
    </td>
    <td>
       <?php
        echo $origin[$names[2]];
        ?>
    </td>
  </tr>
  
  <tr id = "color">
    <td>
       <?php
        echo $names[3];
        ?>
    </td>
    <td>
       <?php
        echo $food_assoc[$names[3]];
        ?>
    </td>
    <td>
       <?php
        echo $origin[$names[3]];
        ?>
    </td>
  </tr>
</table>
    
