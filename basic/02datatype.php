<?php

// boolean
$a = true;
$b = false;

// int
$num = 1;
// double
$d = 1.2;
// string
$str = '123';
$str2 = "324";
$str3 = <<<EOD
can insert the string here;
日本語テスト
中文测试
EOD;


// different with '', ""

$a1 = 'a1';
$a2 = 'a2$a1';
$a3 = "a2$a1";
/*
echo $a2; // a2$a1
echo $a3; // a2a1
'' will not resolve the string
so "" is slower
*/

//convert
//intval();
//floatval();
//doubleval();
//boolval();
//strval()

//$bool_val = boolval(1213);
//var_dump($bool_val);
//$str_val = strval(1221);
//var_dump($str_val);