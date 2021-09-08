<?php

require_once "../View/ViewShowTodoList.php";
require_once "../Services/AddTodoList.php";

addTodoList("Mohammad");
addTodoList("Yusuf");
addTodoList("Fahri");
addTodoList("Siregar");

viewShowTodoList();
