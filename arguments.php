<?php
echo "<br>";
function print_me($name,$sirname,$school,$class)
{
    echo "HELLO, your name is $name  & sirname is $sirname, You are in $school school in $class class";
}

print_me("Rahul","Sharma","XYZ","8th");
echo "<br>";
print_me("ashwin","kale","ABC","10th");
?>



<?php
echo "<br>";
echo "<br>";
function print_default($name=MANOJ,$sirname=SHUKLA,$school=XYZ,$class=9)
{
    echo "HELLO, your name is $name  & sirname is $sirname, You are in $school school in $class class";
}

print_default("Rahul","Sharma","XYZ","8th");
echo "<br>";
print_default("ashwin","kale","ABC","10th");
echo "<br>";
print_default();
?>