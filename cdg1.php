<?php


echo "4" + 05 + 011; //18
echo " ";
echo 5 + 11; //16
echo " ";

echo 05 + 011; //14

echo " ";

echo ord('a'); //97

echo " ";

$a = 4;
echo $a; //4

echo $a++; //4
//echo $a++;
echo " br ";
$b = $a++ + $a++;

echo $b;

function verificationPassword($password)
{
    if (
        strlen($password) >= 8 &&
        //is_numeric($password) && NO
        // preg_match('~[0-9]+~', $password) && previous version 
        preg_match('/[A-Z]/', $password) &&
        //(ord($password) > 65 && ord($password) < 91) //capital letter no because just first character
        preg_match('/[0-9]/', $password)
        // strtolower($password) != $password / previous version
    ) {
        echo "true";
    } else
        echo "no";
}

verificationPassword("iok8lE");



function listHTML($name, $array)
{

    echo "<h3> $name </h3><ul>";
    foreach ($array as $value) {
        // echo "";

        echo "<li> $value </li>\n";


        // echo "<li> $value </li>\n";
        //  echo "<h3>$name</h3><ul><li>Paris</li><li>Berlin</li><li>Moscou</li></ul>"
    }
    echo "</ul>";
}

listHTML("Capitale", ["Paris", "Berlin", "Moscou"]);

# codinGame tutoriel 1/1

$ts = array(-273);

function computeClosestToZero(array $ts)
{
    //return abs values

    $absoluteArray = array_filter($ts);

    foreach ($absoluteArray as &$value) {
        $value = abs($value);
        // echo "This  new value is absolute" . $value . "<br>";
    }

    if (empty($ts)) {
        echo "0" . "<br>";
    } else if (in_array(abs(min($absoluteArray)), $ts)) {
        echo min($absoluteArray) . "<br>";
    } else
        echo "-" . min($absoluteArray) . "<br>";

    // Write your code here
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    return -1;
}

computeClosestToZero($ts);

# codinGame tutoriel 1/2

//$weight1 = "string";
//$weight3 = "string";

// Function that returns the variable name
function getVariavleName($var)
{
    foreach ($GLOBALS as $varName => $value) {
        if ($value === $var) {
            return $varName;
        }
    }
    return;
}



//echo $rest = substr("weight1", -1); //1

function newsolve(
    $width,
    $height,
    $length,
    $mass
) {
    // Write your code here

    $i = 10;
    while (
        $width >= 20 && $width <= 200 &&
        $height >= 20 && $height <= 200 &&
        $length >= 20 && $length <= 200 &&
        $mass >= 10 && $mass <= 1000
    ) {

        if (
            $mass >= 20  //lourd
        ) {
            return "SPECIAL";
        } else if (
            $width * $height * $length >= 10000000 &&
            $mass >= 20  //lourd
        ) {
            return "REJECTED";
        } else {
            return "STANDARD";
        }
        $i = $i + 10;
    }
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    return "";
}

newsolve(2, 2, 5, 6);

function solve($weight0, $weight1, $weight2)
{
    // Function that returns the variable name

    /*    function getVariableName($var)
    {
        foreach ($GLOBALS as $varName => $value) {
            if ($value === $var) {
                return $varName;
            }
        }
        return;
    }*/

    // Function call and display the
    // variable name
    //print getVariableName($weight2);

    //il me reste la boucle 

    /*
    $i = 10;
    while ($i <= 200) {

        if (
            $weight1 > $weight0 && $weight1 > $weight2
        ) {
            //$res = substr("$weight1", -1);
            // echo $weight1;
            //$weight1 = "string";
            echo $weight1 . "index 1  <br>";
        } else if (
            $weight0 >= $weight1 && $weight0 >= $weight2
        ) {
            echo $weight0 . "index 0  <br>";
        } elseif ($weight0 == 00 || $weight1 = 00 || $weight2 = 00) {
            echo "fin";
        } elseif ($weight0 == $weight1) {
            echo $weight0 . "index 0  <br>";
            echo $weight1 . "index 1  <br>";
        } else if ($weight2 == $weight1) {
            echo $weight2 . "index 2  <br>";
            echo $weight1 . "index 1  <br>";
        } else if ($weight2 == $weight0) {
            echo $weight2 . "index 2  <br>";
            echo $weight1 . "index 1  <br>";
        } else {
            //  echo $weight2;
            //$weight2 = "string";
            //  $res = print getVariableName($weight2);
            //  echo $res;
            echo $weight2 . "index 2  <br>";
        }
        $i = $i + 10;
    } */

    // Write your code here
    $i = 10;
    while ($i <= 200) {

        if (
            $weight1 > $weight0 && $weight1 > $weight2
        ) {
            //$res = substr("$weight1", -1);
            // echo $weight1;
            //$weight1 = "string";
            return 1;
        } else if (
            $weight0 >= $weight1 && $weight0 >= $weight2
        ) {
            return 0;
        } elseif ($weight0 == $weight1) {
            return 0;
            return 1;
        } else if ($weight2 == $weight1) {
            return 2;
            return 1;;
        } else if (
            $weight2 == $weight0
        ) {
            return 2;
            return 0;
        } else {
            return 2;
        }
        $i = $i + 10;
    }

    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    return -1;
}

solve(2, 2, 5);



?>











<!--

function functionAvailable($func = "")
{
//----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------

if (function_exists($func)) {
return true;
} else {
return false;
}



//----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
}

functionAvailable('in_array'); // return true;
?>  -->

<!--Compléter le code de la fonction functionAvailable prenant en paramètre une chaîne de caractères $func.
La fonction devra retourner :
- true si $func est une fonction interne à PHP ou définie par l'utilisateur
- false dans tous les autres cas

trueAppel de la fonction avec comme paramètre: 'in_array'
trueErreur durant l'évaluation : La fonction a retourné : '', résultat attendu : '1'

1Appel de la fonction avec comme paramètre: 'in_array'
1Erreur durant l'évaluation : La fonction a retourné : '', résultat attendu : '1'


[10-Sep-2019 11:59:05 Europe/Paris] PHP Fatal error: Uncaught Error: Call to undefined function   return bool () in candidatecode.txt:7
Stack trace:
#0 candidatecode.txt(13): functionAvailable('in_array')
#1 run.txt(29): include('/htdocs/exercis...')
#2 {main}
thrown in candidatecode.txt on line 7
 -->