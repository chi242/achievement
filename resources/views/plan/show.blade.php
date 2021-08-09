<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/todo/show.style.css'}}" rel="stylesheet">
    </head>
    <body>
        
        @if($todo)
        <div class="todo" method="post">
            <form action="/todos/{{ $todo->id }}" id="form_{{ $todo->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <div class="date"><h2>{{$todo->created_at->format('Y年m月d日')}}</h2></div>
                <div>
                    <div class="ToDo item">
                        <p>To do:{{$todo->todolist}}</p>
                    </div>
                    <div class="button">
                        <a href="/todos/{{$todo->id}}/edit">編集</a>
                        <input type="submit" value="削除"/> 
                    </div>
                </div>
            </form>
        </div>
        @endif
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
            
</html>

        