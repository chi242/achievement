<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>細かいゴール</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/goal/index.style.css'}}" rel="stylesheet">
        
    </head>
    <body>
        <nav class="nav">
            <div class="navhome"><h2><a class="mousenav" href="/">Home</a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/goals"> 目標データ </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/planlists"> Planリスト </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/datas"> 分析 </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/reminders"> リマインダー </a></h2></div>
        </nav>
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
</html>