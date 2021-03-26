<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/diary/diary.style.css'}} " rel="stylesheet">
    </head>
    <body>
        <div class="diary">
            <h2>{{$diary->created_at}}</h2>
            <div class="ToDo">
                To do:{{$diary->todo}}
            </div>
            <div class="Review">
                振り返り:{{$diary->review}}
            </div>
        </div>

        <div>[<a href='/'>Back</a>]</div>
    </body>
            
</html>

        