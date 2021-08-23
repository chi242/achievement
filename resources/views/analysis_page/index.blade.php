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
        <!--達成率表示-->
        <div class="container-sm card">
        <div class="col-md-5 offset-md-5">
            <h3>達成度</h3>
                <?php 
                /*planテーブルのレコード数を取得*/
                $totalNumbers = \App\Models\Plan::where('user_id',Auth::id())->count();
                $plans = \App\Models\Plan::where('user_id',Auth::id())->where('status','100');
                $statusNumbers = $plans->count();
                
                if($totalNumbers !== 0){
                $rate = $statusNumbers/$totalNumbers*100;
                $round_rate= round($rate);
                print '達成率'.$round_rate.'%'.PHP_EOL;
                echo $statusNumbers;
                echo '/';
                echo $totalNumbers;
                }else{
                echo 'Planはまだありません。';
                }
                ?>
        </div>
        </div>
        <div class="container-sm card">

            <div class="row">
               
               <div class="col-md-5 offset-md-5">
                @foreach($plan as $plan)   
                    <h3><?php echo $plan['selected_date'] ?></h3>
                    <p>取り組んだ時間   
                    <?php
                    echo $plan['reflection_times'];
                    echo '/';
                    echo $plan['plan_times'];
                    ?>
                    </p>
                    <p>予定開始時間 <?php echo $plan['reflection_start_time'] ?></p>
                    <p>実行開始時間 <?php echo $plan['plan_start_time'] ?></p>
                @endforeach
                 
               </div>
            </div>
            
        </div>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>