<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Services/TodolistService.php';
require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Services\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistView->showTodolist();
}

function testViewAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView->showTodolist();

    $todolistView->addTodolist();

    $todolistView->showTodolist();

}

function testViewRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView->showTodolist();

    $todolistView->removeTodolist();

    $todolistView->showTodolist();

    $todolistView->removeTodolist();
}

testViewRemoveTodolist();