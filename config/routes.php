<?php

/* Массив со списком всех роутов */

return array(
    'new_task' => 'tasks/index',
    'add' => 'tasks/add',
    'sign_in' => 'admin/sign',
    'update' => 'admin/update',
    'admin/login' => 'admin/login',
    'admin/edit/([0-9]+)' => 'admin/edit/$1',
    'admin' => 'admin/index',

    '' => 'home/index'

	);