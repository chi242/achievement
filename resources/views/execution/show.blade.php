<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/review/show.style.css'}}" rel="stylesheet">
    </head>
    <body>
        
        @if($todo)
        <div class="todo" method="post">
            <form action="/reviews/{{ $review->id }}" id="form_{{ $review->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                
                <div class="date"><h2>{{$review->created_at->format('Y年m月d日')}}</h2></div>
                <div class="ToDo item">
                    
                    <!--<p>To do:{{$todo->todolist}}</p>-->
                </div>
                <div>
                    <div class="Review item">
                        <p>振り返り:{{$review->review}}</p>
                    </div>
                    <div class="item">
                        <p>達成度：{{$review->evaluation}}</p>
                    </div>
    
                    <div class="button">
                        <a href="/reviews/{{$review->id}}/edit">編集</a>
                        <input type="submit" value="削除"/> 
                    </div>
                </div>
            </form>
        </div>
        @endif
        <script>
            console.log("hello");
        </script>
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
            
</html>