<?php
require_once "../Model/TodoList.php";
require_once "../Services/AddTodoList.php";

addTodoList("Yusuf");
addTodoList("Mohammad");

var_dump($todoList);