<?php
function g(string $str): string
{
    $i = 0;
    $new_str = "";
    $arr = str_split($str);
    while ($i < strlen($str) - 1) {
      $new_str += $arr[$i + 1];
      $i = $i + 1;
    }
    return $new_str;
}

function f(string $str): string
{
    if(strlen($str) == 0) {
        return "";
    } else if (strlen($str) == 1) {
        return $str;
    }  else {
        $arr = str_split($str);
        return f(g($str)) + $arr[0];
    }
}

function h(int $n, string $str): string
{
    while ($n != 1) {
        if ($n % 2 == 0) {
            $n = $n/2;
        } else {
            $n = 3 * $n + 1;
        }
        $str = f($str);
    }
    return $str;
}

//function pow(int $x, int $y): int
//{
//    if ($y == 0) {
//        return 1;
//    } else {
//        return $x * pow($x, $y-1);
//    }
//}

h(1, "fruits");
h(2, "fruits");
h(5, "fruits");
