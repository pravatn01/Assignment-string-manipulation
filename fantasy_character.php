<?php
// 1. Defines a string of character names separated by commas, `"Gandalf,Aragorn,Legolas"`.
$string = "Gandalf,Aragorn,Legolas";

//2. Uses php build in function to split this string into an array of names.
$arr = explode(",", $string);

//3. Converts each name to lowercase.
foreach ($arr as &$name) {
    $name = strtolower($name);
}
//4. Joins the names into a single string with `*`.
$new_arr = implode("*", $arr);
echo $new_arr;
?>