<?php

/* Класс для работы с юзерами */

class User
{

    // Авторизация (пока нет необходимости проверки из БД)

    public static function signIn($arr)
    {
        $userName = $arr['userName'];
        $pass = $arr['pass'];
        if (($userName == 'admin') && ($pass == '123')) {
            return 'success';
        }
        else {
            return 'error';
        }


    }
}