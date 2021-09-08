<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Services/AddTodoList.php";


function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Tambah telah dibatalkan!" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}