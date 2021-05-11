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
        <div class="diary" method="post">
            <form action="/diaries/{{ $diary->id }}" id="form_{{ $diary->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <div class="date"><h2>{{$diary->created_at->format('Y年m月d日')}}</h2></div>
                <div class="ToDo item">
                    <p>To do:{{$diary->todo}}</p>
                </div>
                <div class="Review item">
                    <p>振り返り:{{$diary->review}}</p>
                </div>
                <div class="button">
                    <a href="/diaries/{{$diary->id}}/edit">編集</a>
                    <input type="submit" value="削除"/> 
                </div>
            </form>
        </div>
        @endif
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
            
</html>

        