<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>振り返りの編集画面</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../../assets/css/execution/edit.style.css'}}"  rel="stylesheet">
    </head>
    <body>
        @if($execution)
        <div class="execution">
            <form action="/executions/{{$execution->id}}/store" method="POST">
             @csrf 
             @method('PUT')
                <div class="date"><h2>{{$execution->created_at->format('Y年m月d日')}}</h2></div>
                <div class="execution item">
                振り返り
                    <textarea type="comment" name="executions[execution]">{{$execution->execution }}</textarea>  
                </div>
                <div class="item">
                    <p>達成度</p>
                    <select name="execution[evaluation]">
                        <option value=1>1</button>
                        <option value=2>2</button>
                        <option value=3>3</button>                        
                        <option value=4>4</button>
                        <option value=5>5</button>
                    </select>

                </div>
                <button type="submit" value="更新">更新</button>
            </form>
        </div>
        <div class="back">[<a href='/executions/{{ $execution->id }}'>Back</a>]</div>
        @endif
    </body>
</html>