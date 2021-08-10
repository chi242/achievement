<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録の編集画面</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../../assets/css/plan/edit.style.css'}}"  rel="stylesheet">
    </head>
    <body>
        @if($plan)
        <div class="plan">
            <form action="/plans/{{$plan->id}}/store" method="POST">
             @csrf 
             @method('PUT')
                <div class="date"><h2>{{$plan->created_at->format('Y年m月d日')}}</h2></div>
                <div class="plan item">
                To do
                    <textarea type="comment" name="plan[planlist]">{{ $plan->plan }}</textarea>
                </div>
                <button type="submit" value="更新">更新</button>
            </form>
        </div>
        <div class="back">[<a href='/plans/{{ $plan->id }}'>Back</a>]</div>
        @endif
    </body>
</html>