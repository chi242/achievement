<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <title>目標</title>
      <!-- Fonts -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
      <style>
        body{
          font-family: 'Noto Sans JP', sans-serif;
        }
        .nav-home{
          background-color: #F9C0C0
        }
        .nav-goal{
          background-color: #F6D6AD
        }
        .nav-planlist{
          background-color: #FAFCC2
        }
        .nav-data{
          background-color: #CCF6C8
        }
        .nav-reminder{
          background-color: #B0EFEB
        }
        .nav-one{
          border-color: #EA868F;
	        border-style: solid;	
        }
      </style> 
      <meta name="google-site-verification" content="IJ2nGXbCbPEZb5hdzpcyqEmljZv1L3htW6sjZ3Vic78" />
    </head>
    <body>
      <div class="nav justify-content-end m-2">
        <!--ユーザーボタン（ログアウト・ホームボタン）-->
        <div class="btn-group">
          <button class="btn btn-outline-primary btn-sm dropdown-toggle justify-content-end" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            User
          </button>
          <ul class="dropdown-menu">
            <!--ログアウトボタン-->
            <li><a href="/logout">ログアウト</a></li>
            <!--Homeボタン-->
            <li><a href="/home">Home</a></li>
          </ul>
        </div>
      </div>
      <!--グローバルナビゲーション-->
      <div class="container-fluid">
        <ul class="nav nav-tabs nav-pills">
          <!--Home画面に遷移するタグ-->
          <li class="nav-item nav-home flex-sm-fill text-sm-center nav-tabs nav-one">
            <a class="nav-link display-6" href="/">Home</a>
          </li>
          <!--目標データ画面に遷移するタグ-->
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-goal display-6" aria-current="page" href="/goals">目標データ</a>
          </li>
          <!--Planlist画面に遷移するタグ-->
          <li class="nav-item  flex-sm-fill text-sm-center">
            <a class="nav-link nav-planlist display-6" href="/planlists">Planリスト</a>
          </li>
          <!--分析画面に遷移するタグ-->
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-data display-6" href="/analysis_pages">分析</a>
          </li>
          <!--リマインダー画面に遷移するタグ-->
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-reminder display-6" href="/reminders">リマインダー</a>
          </li>
        </ul>
      </div>
      <div class="main">
        <div class="container-calendar col-md-4 offset-md-4">
          <div class="card p-4 m-4">
            <!--maingoal表示-->
            <h3>maingoal</h3>
            <div class="maingoal">{{$maingoal['maingoal']}}</div>
            <!--日付選択表示（カレンダー）-->
            <div class="card m-4 p-4">
              <form action="/selected_date" method="POST">
                @csrf
                <lavel for="floatingInput" class="form-label">日付選択<input type="date" class="form-control" name="selected_date" max="9999-12-31" value="<?php echo date('Y-m-d');?>" required></lavel>
                <!--選択ボタン-->
                <button type="submit" class="btn btn-outline-primary m-3">選択</button>
              </form>
            </div>
          </div> 
        </div>
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>

