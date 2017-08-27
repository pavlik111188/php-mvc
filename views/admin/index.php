<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="/template/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Супер Задачник (Админ-панель)</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/new_task">Добавить задачу</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/admin">Админ-Панель <span class="sr-only">(current)</span></a>
            </li>
        </ul>

    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table id="tasksTable" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="no-sort">№</th>
                    <th class="no-sort"></th>
                    <th>Автор</th>
                    <th>Email</th>
                    <th class="no-sort">Задача</th>
                    <th>Статус</th>
                    <th class="no-sort"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasksList as $taskItem):?>
                    <tr class="<?php echo ($taskItem['status'] == 0 ? '' : 'done'); ?>">
                        <td><?php echo $taskItem['id']; ?></td>
                        <td>
                            <img class="thumb" src="<?php echo $taskItem['image']; ?>" />
                        </td>
                        <td><?php echo $taskItem['user_name']; ?></td>
                        <td><?php echo $taskItem['email']; ?></td>
                        <td><?php echo $taskItem['text']; ?></td>
                        <td class="text-center"><?php echo ($taskItem['status'] == 0 ? '' : '<img class="thumb-up" src="../template/images/thumb-up.png" title="Выполнено" alt="Выполнено" />'); ?></td>
                        <td class="text-center"><a href="admin/edit/<?php echo $taskItem['id']; ?>" class="btn btn-primary">Изменить</a></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="/template/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js"></script>
<script src="/template/js/script.js"></script>
</body>
</html>