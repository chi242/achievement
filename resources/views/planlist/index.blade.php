<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Planリスト一覧</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/review/create.style.css'}}" rel="stylesheet">
    </head>
    <body>
        <nav class="nav">
            <div class="navhome"><h2><a class="mousenav" href="/">Home</a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/goals"> 目標データ </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/planlists"> Planリスト </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/datas"> 分析 </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/reminders"> リマインダー </a></h2></div>
        </nav>
        <p>Planリスト一覧</p>
        <!--idが入るようにPlanlistControllerでplans_tableからidの値を取るように設計する（？）-->
        <div>
            <p>〇月〇日</p>
            <!--1の代わりにid-->
        <p><a href="/planlists/1">〇〇テキストP5~P10まで解く(振り返り記入済)</a></p>
        <p><a href="/planlists/1/edit">△△テキストP5~P10まで解く(振り返り未記入)</a></p>
        </div>
        <div>
            <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;>
                    <a href="">
                    <?php 
                        $plan = App\Models\Plan::orderBy('selected_date','desc')->get();
                        foreach($plan as $plan){
                        echo $plan['selected_date'];
                        echo $plan['plan_content'];
                        }
                    ?>
                    </a>
            </div>
        </div>   
            
    </body>
</html>