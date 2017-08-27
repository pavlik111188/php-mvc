<?php

/* Контроллер для работы с Админ-панелью */

include_once ROOT. '/models/Tasks.php';
include_once ROOT. '/models/User.php';

class AdminController
{

    // Функция для вывода главной страницы Админки

    public function actionIndex()
    {
        $tasksList = array();
        $tasksList = Tasks::getTasksList();

        require_once(ROOT . '/views/admin/session.php');
        if (isset($_SESSION['user']) && ($_SESSION['user'] == 'admin')) {
            require_once(ROOT . '/views/admin/index.php');
        }
        else {
            header("Location: " . URL . "admin/login");
        }

        return true;
    }

    // Вывод страницы авторизации

    public function actionLogin()
    {
        require_once(ROOT . '/views/admin/session.php');
        if (isset($_SESSION['user']) && ($_SESSION['user'] == 'admin')) {
            header("Location: " . URL . "admin");
        }
        else {
            require_once(ROOT . '/views/admin/login.php');
        }

        return true;
    }

    // Отправка формы для авторизации

    public function actionSign()
    {
            $user = User::signIn($_POST);
            require_once(ROOT . '/views/admin/session.php');
            if ($user == 'success') {
                $_SESSION['user'] = 'admin';
            }
            if (isset($_SESSION['user']) && ($_SESSION['user'] == 'admin')) {
                header("Location: " . URL . "admin");
            }
            else {
                header("Location: " . URL . "admin/login");
            }


        return true;
    }

    // Вывод страницы изменения выбранной задачи

    public function actionEdit($id)
    {
        require_once(ROOT . '/views/admin/session.php');
        if ($id) {
            $taskItem = Tasks::getTaskItemByID($id);

            require_once(ROOT . '/views/admin/edit.php');

        }

        return true;

    }

    // Отправка формы для изменения выбранной задачи

    public function actionUpdate()
    {
        if ($_POST) {
            $updateArr = $_POST;
            Tasks::updateTask($updateArr);
            header("Location: " . URL . "admin");
        }

        return true;

    }
}