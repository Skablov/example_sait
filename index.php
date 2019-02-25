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
    <title>Главная страница</title>

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
  <div class="bg-dark collapse" id="navbarHeader" style="">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">О нас</h4>
          <p class="text-muted">Часы́ — прибор для определения текущего времени суток и измерения продолжительности временных интервалов в единицах, меньших, чем одни сутки. Самыми точными часами считаются наши.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Для администратора</h4>
          <ul class="list-unstyled">
            <li><a href="sign_up.php" class="text-white">Авторизация</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="/index.php" class="navbar-brand d-flex align-items-center">

        <strong>Clock</strong>
      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Уважаемый пользователь!</h1>
      <p class="lead text-muted">Нижу представлен наш полный ассортимент наручных часов!</p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row " id="main">


      </div>
    </div>
  </div>
  <div id="myModal" class="modal fade">
       <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
               <h4 class="modal-title">Покупка бонга</h4>
             </div>
             <div class="modal-body">
                 <form>
                   <div class="form-group" style="text-align:left">
                     <label id="bong"></label><br>
                     <label>Ваш контактный телефон</label>
                     <input type="text" id="num" placeholder="+71234567890" class="form-control">
                     <label>Способ оплаты</label><br>
                       <select class="form-control" id="option">
                         <option>Онлайн оплата</option>
                         <option>Наличными</option>
                     </select>
                   </div>
                 </form>
             </div>
             <div class="modal-footer">
               <button class="btn btn-success" onclick='modal_window()'>Купить</button>
               <button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>
         </div>
       </div>
     </div><br><br><br>
</main>
<script src="index.js">

</script>
</html>
