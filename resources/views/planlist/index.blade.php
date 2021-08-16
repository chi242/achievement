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
        <!--idが入るようにPlanlistControllerでplans_tableからidの値を取るように設計する（？）-->
        <div>
            <a href= onclick="document">
                        <?php 
                        $plan = App\Models\Plan::orderBy('selected_date','desc')->get();
                        foreach($plan as $plan){
                        echo $plan['selected_date']."\n";?>
                        <a href="reflection_pages/{{ $plan->id }}" onclick="document.{$plan['plan_content']}."><?php echo $plan['plan_content'].'<br />';?></a>
                        <?php } ?>
                
            
        </div>   
            
    </body>
</html>