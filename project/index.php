<?php
$x = 10;
$x1 = 10;
$y = '10';
$z = '000';
$a = 0;
$c = 0.25;
echo "x+c: " . ($x + $c);
echo "<br>x.y: " . ($x . $y);
echo "<br>x.c: " . ($x . $c);
echo "<br>y.z: " . ($y . $z);
$b = ($x == $y);
echo "<br>x==y: " . $b;
$b = ($z == $a);
echo "<br>z==a: " . $b;
$b = ($z == $y);
echo "<br>z==y: " . $b;
$b = ($x == $a);
echo "<br>x==a: " . $b;
$b = ($x === $x1);
echo "<br>x===х1: " . $b;
$b = ($x === $y);
echo "<br>x===y: " . $b;
echo "<br>";
if ($x > $x1) {
    echo "x is greater than x1";
} elseif ($x == $x1) {
    echo "x is equal to x1";
} else {
    echo "x1 is greater than x";
}
echo "<br>";
if ($x > $z) {
    echo "x is greater than z";
} elseif ($x == $z) {
    echo "x is equal to z";
} else {
    echo "z is greater than x";
}
if ($c > $a) {
    echo "<br>c is greater than a";
}

function dod($var1, $var2)
{
    $var3 = $var1 + $var2;
    echo "<br> The sum of variables is: " . $var3;
}
dod($x, $c);
function arithop($var1, $var2)
{
    $var3 = (($var1 - $var2 + $var1 * $var2) / $var1) ** ($var1 % $var2);
    echo "<br>The result of equation will be: " . $var3;
}
$c = 6;
arithop($x, $c);

echo "<br> Arrays and fors<br>";
$array1 = array("Pizza", "mozzarella", "rella", "gorgonzola", "zola");
$array2 = array(23, 12, 45, 67);
$arraym = array(array("apple", "pie", 34), array("sweet", "potato", 45), array("blue", "cheese", 67));
$arraya = array("First part" => "Phantom blood", "Second part" => "Battle tendecy", "Third part" => "Stardust crusaders");
echo "Printing index array with echo<br>";
echo "$array1[0], $array1[1], $array1[2], $array1[3], $array1[4].<br>$array2[0], $array2[1], $array2[2], $array2[3].";
echo "<br>Printing index array with for<br>";
for ($var = 0; $var < count($array1); $var++) {
    echo "$array1[$var] ";
}
echo "<br>";
foreach ($array2 as $var) {
    echo "$var ";
}
echo "<br>";
echo "Printing associative array with echo<br>";
echo "The third part is called " . $arraya['Third part'];
echo "<br>Printing associative array with for<br>";
foreach ($arraya as $var => $var_value) {
    echo "Part: " . $var . ". Name: " . $var_value;
    echo " ";
}
echo "<br>Printing multidimensional array with echo<br>";
echo "First product name is: ". $arraym[0][0]." ". $arraym[0][1].". Second product name is: ".$arraym[1][0]." ". $arraym[1][1];
echo "<br>Printing multidimensional array with for<br>";
for ($row = 0; $row < 3; $row++) {
    echo "Product $row: ";
    for ($col = 0; $col < 2; $col++) {
      echo $arraym[$row][$col];
      echo " ";
    }
    echo ". ";
}

echo "<br>Explode/implode";
$str1 = "There is some bug on your face";
$str2 = "books, today, look, delicious";
$exstr1 = explode(" ", $str1);
$exstr2 = explode(",", $str2);
echo "<br>What we get is: ". $exstr1[0];
echo "<br>And: ". $exstr2[0]. "<br>";
echo implode(", ", $exstr1);
echo "<br>". implode(" ", $exstr2);
?>