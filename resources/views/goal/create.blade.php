<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>作成</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/goals/details" method="POST">
            @csrf
        <div>
            MainGoal
            <input type="text" name="goal[maingoal]" placeholder="メインの目標を書いてください。"/>
        </div>
        <div>
            Measureable
            <textatra type="comment"　name="goal[measureable]" placeholder="数字的な目標を書いてください。"></textatra>        
        </div>
        <div>
            Actionable
            <textarea type="comment" name="goal[actionable]" placeholder="目標にたどり着くまでのプロセスを書いてください。"></textarea>
        </div>
        <div>
            Competent
            <textarea type="comment" name="goal[competent]" placeholder="目標内容が自分の価値観に基づいているかについて書いてください。"></textarea>
        </div>
            <div><input type ="submit" value="登録"/></div>
            <div><button type=“button” onclick="location.href='/goals/{post}/cre-edit'">編集</button></div>
        </form>
        <div>[<a href='/'>Back</a>]</div>


    </body>
</html>