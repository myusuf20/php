<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Services/TodolistService.php";

use Services\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = "Belajar PHP Dasar";
    $todolistRepository->todolist[2] = "Belajar PHP OOP";
    $todolistRepository->todolist[3] = "Belajar PHP Database";

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

testShowTodolist();