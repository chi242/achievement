<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録の編集画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/posts/details" method="POST">
            <h2>{{$t_diary->created_at->format('Y年m月d日') }}</h2>
            <div class="ToDo">
            To do
                <textarea   type="comment" name="t_diaries[todo]" placeholder="今日やるべきことを記入してください。"></textarea>
            </div>
            <div class="Review">
            振り返り
                <textarea type="comment" name="t_diaries[review]" placeholder="今日のできたことやできなかったことを記入してください。"></textarea>  
            </div>
            <button type="submit" value="更新"></button>
        </form>
        <div>[<a href='/'>Back</a>]</div>
    </body>
            
</html>