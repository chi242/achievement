  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <title>Planリスト一覧</title>
      <!-- Fonts -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">    
      <!--グローバルナビゲーションのタグの色-->
      <style>
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
        border-color: #FFDA6A;
    	  border-style: solid;	
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
          <li class="nav-item nav-home flex-sm-fill text-sm-center">
            <a class="nav-link display-6" href="/">Home</a>
          </li>
          <!--目標データ画面に遷移するタグ-->
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-goal display-6" aria-current="page" href="/goals">目標データ</a>
          </li>
          <!--Planlist画面に遷移するタグ-->
          <li class="nav-item  flex-sm-fill text-sm-center nav-one">
            <a class="nav-link nav-planlist display-6" href="/planlists">Planリスト</a>
          </li>
          <!--分析画面に遷移するタグ-->
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-another nav-data display-6" href="/analysis_pages">分析</a>
          </li>
          <!--リマインダー画面に遷移するタグ-->
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-another nav-reminder display-6" href="/reminders">リマインダー</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4 offset-md-4">
        <!--日付ごとのPlanリスト-->
        <div class="card m-4 p-4">
            
          @if(count($plans)=== 0)
            <p>Planはまだありません。</p>
          @else
            
            @foreach($plans as $plan)
            <div class="card m-4 p-4" style="width:30rem;">
              <!--選択日表示-->
              <p>{{ $plan->selected_date->format('Y年m月d日') }}</p>
              <!--Planで設定したデータをまとめたページに遷移するリンク-->
              <a href="reflection_pages/{{ $plan->id }}">{{$plan->plan_content}}</a>
            </div>
            @endforeach
          @endif
          


        </div>
      </div>   
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </html>