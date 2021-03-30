<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録の編集画面</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../../assets/css/diary/edit.style.css'}}"  rel="stylesheet">
    </head>
    <body>
        @if($diary)
        <div class="diary">
            <form action="/diaries/{{$diary->id}}/store" method="POST">
             @csrf 
             @method('PUT')
                <div class="date"><h2>{{$diary->created_at}}</h2></div>
                <div class="ToDo item">
                To do
                    <textarea type="comment" name="diaries[todo]">{{ $diary->todo }}</textarea>
                </div>
                <div class="Review item">
                振り返り
                    <textarea type="comment" name="diaries[review]">{{$diary->review }}</textarea>  
                </div>
                <button type="submit" value="更新">更新</button>
            </form>
        </div>
        <div class="back">[<a href='/diaries/{{ $diary->id }}'>Back</a>]</div>
        @endif
    </body>
</html>