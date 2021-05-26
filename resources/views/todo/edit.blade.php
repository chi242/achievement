<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録の編集画面</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../../assets/css/todo/edit.style.css'}}"  rel="stylesheet">
    </head>
    <body>
        @if($todo)
        <div class="todo">
            <form action="/todos/{{$todo->id}}/store" method="POST">
             @csrf 
             @method('PUT')
                <div class="date"><h2>{{$todo->created_at->format('Y年m月d日')}}</h2></div>
                <div class="ToDo item">
                To do
                    <textarea type="comment" name="todo[todolist]">{{ $todo->todo }}</textarea>
                </div>
                <button type="submit" value="更新">更新</button>
            </form>
        </div>
        <div class="back">[<a href='/todos/{{ $todo->id }}'>Back</a>]</div>
        @endif
    </body>
</html>