<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/todo/create.style.css'}}" rel="stylesheet">
    </head>
    <body>
        <form action="/todos" method="POST" >
         @csrf 
            <div class="form">
                @if($todo)
                <h2>{{$todo->created_at}}</h2>
                @endif
                <div class="frame">
                    <p>To do</p>
                    <textarea type="comment" name="todo[todolist]" placeholder="今日やるべきことを記入してください。">
                    </textarea>
                </div>
                <div class="frame"><a href="/reviews/create">振り返りをする</a></div>
            </div>
            <div class="button frame">
                <button type="submit" value="保存">保存</button>
            </div>
        </form>
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
            
</html>