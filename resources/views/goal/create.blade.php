<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>作成</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/goal/create.style.css'}} " rel="stylesheet">
    </head>
    <body>
        <form action="/goals" method="POST">
            @csrf
        <div>    
            <div class="form frame">
                <p>MainGoal</p>
                <input type="text" name="goal[maingoal]" placeholder="メインの目標を書いてください。"/>
            </div>
            <div class="form frame">
                <p>Measurable</p>
                <textarea type="comment" name="goal[measurable]" placeholder="数字的な目標を書いてください。"></textarea>        
            </div>
            <div class="form frame">
                <p>Actionable</p>
                <textarea type="comment" name="goal[actionable]" placeholder="目標にたどり着くまでのプロセスを書いてください。"></textarea>
            </div>
            <div class="form frame">
                <p>Competent</p>
                <textarea type="comment" name="goal[competent]" placeholder="目標内容が自分の価値観に基づいているかについて書いてください。"></textarea>
            </div>
            <div class="form button">
                <input type ="submit" value="登録"/>
            </div>

            </form>
        </div>
            <div class="back">[<a href='/'>Home</a>]</div>
        

    </body>
</html>