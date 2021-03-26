<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/diary/create.style.css'}} " rel="stylesheet">
    </head>
    <body>
        <form action="/diaries/create" method="POST" >
         @csrf 
            <div class="form">
                <h2>{{$diary->created_at}}</h2>
                <div class="frame">
                    <p>To do</p>
                    <textarea type="comment" name="diary[todo]" placeholder="今日やるべきことを記入してください。"></textarea>
                </div>
                <div class="frame">
                    <p>振り返り</p>
                    <textarea type="comment" name="diary[review]" placeholder="今日のできたことやできなかったことを記入してください。"></textarea>  
                </div>
            </div>
            <div class="button frame">
                <button type="submit" value="保存">保存</button>
                <button type="button" onclick="location.href='/diaries/edit'">編集</button>
            </div>
        </form>
        <div>[<a href='/'>Back</a>]</div>
    </body>
            
</html>