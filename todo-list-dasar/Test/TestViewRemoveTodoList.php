<?php
require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once  "../Services/ShowTodoList.php";
require_once "../Services/AddTodoList.php";

addTodoList("Mohammad");
addTodoList("Yusuf");
addTodoList("Simon");
addTodoList("Kasih");

showTodoList();

viewRemoveTodoList();

showTodoList();
