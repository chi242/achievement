<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <title>細かいゴール</title>
      <!-- Fonts -->
      <!--<link href="secure_asset{{'../../../assets/css/goal/index.style.css'}}" rel="stylesheet">-->
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
      </style> 
    </head>
    <body>
      <div class="nav justify-content-end">
        <!--ゴールメニューボタン-->
        <div class="btn-group">
          <button class="btn btn-outline-primary btn-sm dropdown-toggle justify-content-end" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </button>
          <ul class="dropdown-menu">
            <li>goal1</li>
            <li>goal2</li>
            <li>goal3</li>
          </ul>
        </div>
        <!--ユーザーボタン（ログアウト・ホームボタン）-->
        <div class="btn-group">
          <button class="btn btn-outline-primary btn-sm dropdown-toggle justify-content-end" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            User
          </button>
          <ul class="dropdown-menu">
            <li><a href="/logout">ログアウト</a></li>
            <li><a href="/home">Home</a></li>
          </ul>
        </div>
      </div>
      <div class="container-fluid">
        <ul class="nav nav-tabs nav-pills">
          <li class="nav-item nav-home flex-sm-fill text-sm-center">
            <a class="nav-link nav-another display-6" href="/">Home</a>
          </li>
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-one nav-goal display-6" aria-current="page" href="/goals">目標データ</a>
          </li>
          <li class="nav-item  flex-sm-fill text-sm-center">
            <a class="nav-link nav-another nav-planlist display-6" href="/planlists">Planリスト</a>
          </li>
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-another nav-data display-6" href="/analysis_pages">分析</a>
          </li>
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-another nav-reminder display-6" href="/reminders">リマインダー</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4 offset-md-4">
        <div class="card m-4 p-4" style="width:30rem;">
            <table class="table table-borderless">
            <tbody>
              <tr>
                <th scope="row">maingoal</th>
                <td>{{$maingoal['maingoal']}}</td>
              </tr>
              <tr>
                <th scope="row">measurable</th>
                <td>{{$measurable['measurable']}}</td>
              </tr>
              <tr>
                <th scope="row">actionable</th>
                <td>{{$actionable['actionable']}}</td>
              </tr>
                <tr>
                <th scope="row">competent</th>
                <td>{{$competent['competent']}}</td>
              </tr>
            </tbody>
            </table>
        </div>
      </div>
      <a href="/goals/create" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">目標を設定する</a>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>