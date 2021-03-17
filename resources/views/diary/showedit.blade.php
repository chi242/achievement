<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録の編集画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/diaries/edit/{{$diary->id}}" method="POST">
         @csrf 
         @method('PUT')
            <h2>{{$diary->created_at}}</h2>
            <div class="ToDo">
            To do
                <textarea   type="comment" name="diaries[todo]" placeholder="今日やるべきことを記入してください。"></textarea>
            </div>
            <div class="Review">
            振り返り
                <textarea type="comment" name="diaries[review]" placeholder="今日のできたことやできなかったことを記入してください。"></textarea>  
            </div>
            <button type="submit" value="更新">更新</button>
        </form>
        <div>[<a href='/diaries/show'>Back</a>]</div>
    </body>
            
</html>