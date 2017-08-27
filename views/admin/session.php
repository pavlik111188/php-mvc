<?php

/* Файл для запуска сессии */
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
