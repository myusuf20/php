<?php

namespace Services
{

    use Repository\TodolistRepository;

    interface TodolistService
    {
        function showTodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService
    {
        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todoList = $this->todolistRepository->findAll();
            foreach ($todoList as $number => $value)
            {
                echo "$number. $value" . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            // TODO: Implement addTodolist() method.
        }

        function removeTodolist(int $number): void
        {
            // TODO: Implement removeTodolist() method.
        }
    }

}
