<?php

namespace View
{
    use Services\TodolistService;
    use Helper\InputHelper;

    class TodolistView
    {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah  Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilihan");

                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->removeTodolist();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Maaf pilihan anda tidak tersedia!" . PHP_EOL;
                }
            }
            echo "Sampai jumpa lagi kawan!" . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "Menambah TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal)");

            if ($todo == "x") {
                echo "Batal menambah todolist" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }

        function removeTodolist(): void
        {
            echo "Menghapus TDO" . PHP_EOL;

            $pilihan = InputHelper::input("Ketik (x untuk batalkan)");

            if ($pilihan == "x") {
                echo "Batal menghapus TODO" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}

