<?php

/* Контроллер для работы с главной страницей */

include_once ROOT. '/models/Tasks.php';

class HomeController
{

    // Вывод списка задач на главной странице

    public function actionIndex()
    {
        $tasksList = array();
        $tasksList = Tasks::getTasksList();

        require_once(ROOT . '/views/home/index.php');

        return true;
    }
}