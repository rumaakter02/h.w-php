<!DOCTYPE html>
<html>
<body>
 <h1>My Firsty PHP Page</h1>

 <p>Dhaka Polytechnic Institute
    <br>Now Study AT:IIST
 </p>
<?php
// variable
/*
multi line comment
*/
$color ="Ruma Akter"."<br>";
echo $color;

$txt ="text";
echo "Roll: 147067"."<br>";
// variable concat
$txt2 ="Semester: 8th"."<br>";
echo "Shift: 1st" ."<br>" . $txt2 ."Department: CST" ."<br>";

// variable addition

$x = 11;
$y = 10;
echo $x + $y . "<br>";

// array

$laptop =array("Dell", "HP", "Apple", "Lenovo", "Asus");
var_dump($laptop);

?>

</body>
</html>