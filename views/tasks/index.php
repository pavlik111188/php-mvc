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
    <a class="navbar-brand" href="/">Супер Задачник</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/new_task">Добавить задачу <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/admin">Админ-Панель</a>
            </li>
        </ul>

    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col align-self-center">
            <h2>Страница добавления новой задачи</h2>
            <form action="/add" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="userName">Имя Автора</label>
                    <input type="text" class="form-control" id="userName" name="userName" placeholder="Имя Автора" required>
                </div>
                <div class="form-group">
                    <label for="userEmail">Email</label>
                    <input type="email" class="form-control" name="userEmail" id="userEmail" aria-describedby="emailHelp" placeholder="Введите email" required>
                </div>
                <div class="form-group">
                    <label for="task">Текст задачи</label>
                    <textarea class="form-control" id="task" name="task" rows="3" required></textarea>
                </div>
                <div class="form-group add-task">
                    <img class="thumb" src="#" alt="Миниатюра" /><br />
                    <label for="image">Миниатюра</label>
                    <input type="file" class="form-control-file" accept="image/*" id="image" name="image" aria-describedby="fileHelp" required>
                    <small id="fileHelp" class="form-text text-muted">Укажите картинку в формате JPEG, PNG или GIF</small>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Сохранить"/>

            </form>
            <br />
            <button class="btn btn-primary prew-btn">Предварительный просмотр</button>
        </div>
    </div>
    <div class="row preview">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-block">
                    <h3>Предварительный просмотр</h3>
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <img class="thumb" src="#" alt="Миниатюра" />
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="/template/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js"></script>
<!--
<script src="/template/js/jquery.js"></script>
<script src="/template/js/bootstrap.min.js"></script>-->
<script src="/template/js/script.js"></script>
</body>
</html>