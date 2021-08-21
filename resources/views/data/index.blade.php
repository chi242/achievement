<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>分析</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/review/create.style.css'}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <nav class="nav">
            <div class="navhome"><h2><a class="mousenav" href="/">Home</a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/goals"> 目標データ </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/planlists"> Planリスト </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/datas"> 分析 </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/reminders"> リマインダー </a></h2></div>
        </nav>
        <!--達成率表示-->
        <div>
            <p>達成度</p>
                <?php 
                
                /*planテーブルのレコード数を取得*/
                $totalNumbers = \App\Models\Plan::where('user_id',Auth::user()->id)->count();
                $plans = \App\Models\Plan::where('user_id',Auth::user()->id)->where('status','0');
                $statusNumbers = $plans->count();
                
                if($totalNumbers !== 0){
                function achievement_rate($totalNumbers,$statusNumbers){
                $rate = $statusNumbers/$totalNumbers*100;
                return $rate;
                $rate = achievement_rate($totalNumbers,$statusNumbers);//達成率
                $round_rate= round($rate);//四捨五入
                print '達成率'.$round_rate.'%';
                
                echo $statusNumbers;
                echo '/';
                echo $totalNumbers,PHP_EOL;
                }
                }else{
                echo 'Planはまだありません。';
                }
                ?>
        </div>
        <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><? php echo $round_rate ?></div>
        </div>

            <div class="row">
               
               <div class="col-md-4 offset-md-4">
                @foreach($plan as $plan)   
                    <h3><?php echo $plan['selected_date'] ?></h3>
                    <p>取り組んだ時間</p>
                    <p>
                    <?php
                    echo $plan['reflection_times'];
                    echo '/';
                    echo $plan['plan_times'];
                    ?>
                    <p>予定開始時間　<?php echo $plan['reflection_start_time'] ?></p>
                    <p>実行開始時間　<?php echo $plan['plan_start_time'] ?></p>
                    </p>
                @endforeach
                 
               </div>

            </div>
            
        </div>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>