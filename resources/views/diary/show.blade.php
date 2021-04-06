<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/diary/show.style.css'}}" rel="stylesheet">
    </head>
    <body>
        @if($diary)
        <div class="diary">
            <div class="date"><h2>{{$diary->created_at}}</h2></div>
            <div class="ToDo item">
                <p>To do:{{$diary->todo}}</p>
            </div>
            <div class="Review item">
                <p>振り返り:{{$diary->review}}</p>
            </div>
            <div class="button">
                <a href="/diaries/{{$diary->id}}/edit">編集</a>
            </div>
        </div>
        @endif
        <div class="back">[<a href='/'>Back</a>]</div>
    </body>
            
</html>

        