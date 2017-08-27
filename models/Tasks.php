<?php

/* Модель для работы с задачами */

class Tasks
{

    //Выборка отдельной задачи по $id

    public static function getTaskItemByID($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM tasks WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $taskItem = $result->fetch();

            return $taskItem;
        }

    }

    //Выборка всех задач

    public static function getTasksList() {
        $db = Db::getConnection();
        $tasksList = array();

        $result = $db->query('SELECT * FROM tasks ORDER BY id ASC');

        $i = 0;
        while($row = $result->fetch()) {
            $tasksList[$i]['id'] = $row['id'];
            $tasksList[$i]['user_name'] = $row['user_name'];
            $tasksList[$i]['email'] = $row['email'];
            $tasksList[$i]['text'] = $row['text'];
            $tasksList[$i]['image'] = $row['image'];
            $tasksList[$i]['status'] = $row['status'];
            $i++;
        }

        return $tasksList;

    }

    //Добавление в БД новой задачи

    public static function addNewTask($arr, $thumb_src) {

        $userName = $arr['userName'];
        $userEmail = $arr['userEmail'];
        $task = $arr['task'];
        $inputFile = $thumb_src;
        $db = Db::getConnection();
        $result = $db->query('INSERT INTO tasks (user_name,email,text,image) VALUES("'.$userName.'","'.$userEmail.'","'.$task.'","'.$inputFile.'")');

        return true;

    }

    //Изменение выбранной задачи

    public static function updateTask($arr) {

        $id = $arr['id'];
        $status = $arr['status'];
        $task = $arr['task'];
        $db = Db::getConnection();
        $result = $db->query('UPDATE tasks SET text = "'.$task.'", status = "'.$status.'" WHERE id = '.$id);

        return true;

    }
}