<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="" method="POST">
        <h2>{{$post->created_at->format('Y年m月d日') }}</h2>
        <div class="ToDo">
            To do
            <textarea type="comment" name="post[todo]" placeholder="今日やるべきことを記入してください。"></textarea>
        </div>
        <div class="Review">
            振り返り
            <textarea type="comment" name="post[review]" placeholder="今日のできたことやできなかったことを記入してください。"></textarea>  
        </div>
        <div><button type="submit" value="保存">保存</button></div>
        </form>
        <div><button type=“button” onclick="location.href='/posts/{post}/show/edit2'">編集</button></div>
        <div>[<a href='/'>Back</a>]</div>
    </body>
            
</html>