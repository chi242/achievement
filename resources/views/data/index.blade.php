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
        <p>分析</p>
        <div>
            <p>達成度</p>
                <?php 
                function achievement_rate($totalNumbers,$statusNumbers){
                $formula = statusNumbers/totalNumbers*100;
                return $formula;
                }
                /*planテーブルのレコード数を取得*/
                $totalNumbers = \Illuminate\Support\Facades\DB::table('plans')->count();
                $plans = \App\Models\Plan::where('status','0');
                $statusNumbers = $plans->count();
                
                echo $totalNumbers;
                echo $statusNumbers;
                
                $achievement_rate($totalNumbers,$statusNumbers)
                print '達成率.$achievement_rate';
                ?>
        </div>
        <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
        <div>
            
            <P></P>
            <div>
               <div>
                   <p>取り組んだ時間</p>
                   <p>{{$plan->plan_times}}</p>
               </div>
               <div>
                   <p>開始時間</p>
                   <ul>
                   <li>予定時間{{$plan->plan_times}}</li>
                   <li>実行時間</li>
                   </ul>
               </div>
            </div>
            
        </div>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>