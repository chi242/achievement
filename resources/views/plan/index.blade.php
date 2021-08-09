<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/todo/create.style.css'}}" rel="stylesheet">
    </head>
    <body>
        <form action="/index" method="POST" >
         @csrf 
            <p>To do</p>
                        @if($goal)
                        @foreach ($todo as $todo)
                        <a href="/todos/{{ $todo->id }}">
                        <div>{{$todo->created_at->format('Y年m月d日')}}</div>
                        </a>
                        <div>{{$todo->todolist}}</div>
                        @endforeach
                        @endif
                <div class="frame"><a href="/reviews/create">振り返りをする</a></div>
            </div>

        </form>
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
            
</html>