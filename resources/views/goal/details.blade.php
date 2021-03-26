<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>細かいゴール</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/goal/details.style.css'}} " rel="stylesheet">
        
    </head>
    <body>
        <nav class="nav">
            <div class="navhome"><h2><a href="/">ホーム</a></h2></div>
            <div class="navgoal"><h2>細かいゴール</h2></div>
        </nav>
        <div class="detail">
            <div class="goals"><h3>maingoal</h3>{{ $goal->maingoal }}</div>
            <div class="goals"><h3>measurable</h3>{{ $goal->measurable }}</div>
            <div class="goals"><h3>actionable</h3>{{ $goal->actionable }}</div>
            <div class="goals"><h3>competent</h3>{{ $goal->competent }}</div>
        </div>
        <div><a href="/goals/create">目標設定</a></div>
    </body>
</html>