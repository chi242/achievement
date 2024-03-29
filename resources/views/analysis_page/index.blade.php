<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <title>分析</title>
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
        border-color: #79DFC1;
    	  border-style: solid;	
      }         
      </style> 
    </head>
    <body>
      <div class="nav justify-content-end">
        <!--ユーザーボタン（ログアウト・ホームボタン）-->
        <div class="btn-group m-2">
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
            <a class="nav-link display-6" href="/">Home</a>
          </li>
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-goal display-6" aria-current="page" href="/goals">目標データ</a>
          </li>
          <li class="nav-item  flex-sm-fill text-sm-center">
            <a class="nav-link nav-planlist display-6" href="/planlists">Planリスト</a>
          </li>
          <li class="nav-item flex-sm-fill text-sm-center nav-one">
            <a class="nav-link nav-data display-6" href="/analysis_pages">分析</a>
          </li>
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-reminder display-6" href="/reminders">リマインダー</a>
          </li>
        </ul>
      </div>
        <!--達成率表示-->
        <div class="col-md-4 offset-md-4">
          <div class="container-sm card p-4 m-4">
          <h3>達成度</h3>
          <!--達成率（四捨五入）-->
          <p>{{$round_rate}}</p>
          <!--達成率が100％のPlanの数/すべてのPlanの数-->
          <p>{{$statusNumbers}} / {{$totalNumbers}}</p>
        </div>
      </div>
      <div class="col-md-4 offset-md-4">
        <div class="row">
          <!--選択日の記録のまとめ-->
            @if(count($plans) === 0)
            
            @else
              <div class="container-sm card p-4 m-4">
              @foreach($plans as $plan)
              <div class="card m-4 p-4">
              <!--日付-->
              <h3>{{$plan->selected_date->format('Y年m月d日')}}</h3>
              <p>取り組んだ時間 {{$plan->reflection_times->format('G:i')}}/{{$plan->plan_times->format('G:i')}}</p>
              <p>予定開始時間 {{$plan->reflection_start_time->format('H:i')}}</p>
              <p>実行開始時間 {{$plan->plan_start_time->format('H:i')}}</p>
              </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>