<?php
require_once "../Model/TodoList.php";
require_once "../Services/AddTodoList.php";
require_once "../Services/ShowTodoList.php";
require_once "../Services/RemoveTodoList.php";

addTodoList("Mohammad");
addTodoList("Yusuf");
addTodoList("Permana");
addTodoList("Ananda");
addTodoList("Sengketa");

showTodoList();

removeTodoList(3);

showTodoList();

$success = removeTodoList(5);
var_dump($success);

showTodoList();