<?php
require_once "../View/ViewAddTodoList.php";
require_once "../Services/ShowTodoList.php";
require_once "../Services/AddTodoList.php";

addTodoList("Mohammad");
addTodoList("Yusuf");

viewAddTodoList();;

showTodoList();