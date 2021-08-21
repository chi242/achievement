<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Planリスト一覧</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/review/create.style.css'}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
        </style> 
    </head>
    <body>
        <nav class="nav">
            <div class="navhome nav-home"><h2><a class="mousenav" href="/">Home</a></h2></div>
            <div class="navgoal nav-goal"><h2><a class="mousenav" href="/goals"> 目標データ </a></h2></div>
            <div class="navgoal nav-planlist"><h2><a class="mousenav" href="/planlists"> Planリスト </a></h2></div>
            <div class="navgoal nav-data"><h2><a class="mousenav" href="/datas"> 分析 </a></h2></div>
            <div class="navgoal nav-reminder"><h2><a class="mousenav" href="/reminders"> リマインダー </a></h2></div>
        </nav>
        <!--idが入るようにPlanlistControllerでplans_tableからidの値を取るように設計する（？）-->
        <div>
                        <?php 
                        $plan = App\Models\Plan::where('user_id',Auth::id())->orderBy('selected_date','desc')->get();
                        foreach($plan as $plan){
                        echo $plan['selected_date']."\n";?>
                        <a href="reflection_pages/{{ $plan->id }}" onclick="document.{$plan['plan_content']}."><?php echo $plan['plan_content'].'<br />';?></a>
                        <?php } ?>
                
            
        </div>   
            
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>