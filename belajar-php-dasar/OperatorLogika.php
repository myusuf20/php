<?php
// Operator logika adalah operator untuk membandingkan dua nilai boolean
// Hasil dari operator logika adalah boolean lagi

/*
 - $a && $b -> And -> True jika $a dan $b keduanya true
 - $a and $b -> And -> True jika $a dan $b keduanya true
 - $a || $b -> Or -> True jika $a dan $b salah satu atau keduanya true
 - $a or $b -> Or -> True jika $a dan $b sakah satu atau keduanya true
 - !$a -> Not -> True jika $a bernilai false
 - $a xor $b -> Xor -> True jika $a dan $b salah satu true, tapi tidak keduanya
 */

var_dump(true && true); // outputnya bool(true)
var_dump(true && false); // outputnya bool(false)

var_dump(true || false); // outputnya bool(true)
var_dump(true || true); // outputnya bool(true)

var_dump(true xor false); // outputnya bool(true)
var_dump(true xor true); // outputnya bool(false)
var_dump(false xor false); // outputnya bool(false)

var_dump(!true); // outputnya bool(false)
var_dump(!false); // outputnya bool(true)