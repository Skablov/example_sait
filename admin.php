<?php
  session_start();
  if($_SESSION['id'] != 1)
  {
    header("Location: /index.php");
    exit;
  }
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>Страница администратора</title>

    <!-- Bootstrap core CSS -->
<link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }
      h3{
        margin-left: 60;
      }
      img{
        width: 250;
        height: 300;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="/index.php" class="navbar-brand d-flex align-items-center">

        <strong>Clock</strong>
      </a>
     <a href="/exit.php">
       <strong class="btn btn-danger">Выйти</strong>
     </a>
    </div>
  </div>
</header>

<main role="main">

  <div class="container"><br><br>
    <div class="row">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>Товар</th>
            <th>Номер телефона</th>
            <th>Тип оплаты</th>
          </tr>
        </thead>
        <tbody id="tbody">
        </tbody>
      </table>
    </div><br><br>
  </div>

  <div class="container">
    <div class="row">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>Название товара</th>
            <th>Стоимость</th>
            <th>Путь к изображению</th>
          </tr>
        </thead>
        <tbody id="main">
        </tbody>
      </table>
      <label class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Добавить товар</label>
    </div><br><br>
  </div>

  <div id="myModal" class="modal fade"> <--! Модальное окно для добавления товара, открывается если нажать на кнопку с таргетом на это окно-->
     <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
             <h4 class="modal-title">Покупка бонга</h4>
           </div>
           <div class="modal-body">
               <form>
                 <div class="form-group" style="text-align:left">
                   <label id="bong"></label><br>
                   <label>Название товара</label>
                   <input type="text" id="name" placeholder="Clock.." class="form-control">
                   <label>Описание товара</label>
                   <input type="text" id="dis" placeholder="Описание товара..." class="form-control">
                   <label>Путь к изображению</label>
                   <input type="text" id="img" placeholder="example.jpg" class="form-control">
                   <label>Цена</label><br>
                   <input type="text" id="cost" placeholder="2000..." class="form-control">
                 </div>
               </form>
           </div>
           <div class="modal-footer">
             <button class="btn btn-success" onclick='modal_window()'>Добавить</button>
             <button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>
       </div>
     </div>
   </div>
  <script src="admin.js">

  </script>
</main>
