<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/execution/create.style.css'}}" rel="stylesheet">
    </head>
    <body>
        <form action="/executions" method="POST" >
         @csrf 
            <div class="form">
                @if($plan)
                <h2>{{$plan->created_at}}</h2>
                @endif
                <div class="frame">
                    <p>振り返り</p>
                    <textarea type="comment" name="execution[execution]" placeholder="今日のできたことやできなかったことを記入してください。"></textarea>  
                </div>
                <div><input type="time" name="executions[execution_start_time]" style="width:80px"></div>
                <div><input type="time" name="executions[execution_times]" style="width:80px"></div>
                <div class="frame">
                    <p>達成度</p>
                    <select name="execution[evaluation]">
                        <option value=1>1</button>
                        <option value=2>2</button>
                        <option value=3>3</button>                        
                        <option value=4>4</button>
                        <option value=5>5</button>
                    </select>
                </div>
            </div>
            <div class="button frame form">
                <button type="submit" value="保存">保存</button>
            </div>
        </form>
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
</html>
