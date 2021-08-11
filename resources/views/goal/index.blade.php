<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>細かいゴール</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/goal/index.style.css'}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="btn-group">
          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </button>
          <ul class="dropdown-menu">
            <li>goal1</li>
            <li>goal2</li>
            <li>goal3</li>
          </ul>
        </div>
        <div class="btn-group">
          <button class="btn btn-secondary btn-sm" type="button">
            UserName
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li>ログアウトする</li>
            <li><a href="/">Home</a></li>
          </ul>
        </div>
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link nav-another" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-one" aria-current="page" href="/goals">目標データ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-another" href="/plangoals">Planリスト</a>
          </li>
          <li class="nav-item nav-another">
            <a class="nav-link" href="/dates">分析</a>
          </li>
          <li class="nav-item nav-another">
            <a class="nav-link" href="/reminders">リマインダー</a>
          </li>
        </ul>
        <div class="detail">
        @if($goal)
        
            <div class="goals"><h3>maingoal</h3>{{ $goal->maingoal }}</div>
            <div class="goals"><h3>measurable</h3>{{ $goal->measurable }}</div>
            <div class="goals"><h3>actionable</h3>{{ $goal->actionable }}</div>
            <div class="goals"><h3>competent</h3>{{ $goal->competent }}</div>
        
        @endif
        </div>
        <div class="newgoal"><a href="/goals/create">目標を設定する</a></div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>