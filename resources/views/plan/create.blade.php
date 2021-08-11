<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/plan/create.style.css'}}" rel="stylesheet">
    </head>
    <body>
        <form action="/plans" method="POST" >
         @csrf 
            <div class="form">
                @if($plan)
                <h2>{{$plan->selected_at}}</h2>
                @endif
                <div class="frame">
                    <p>Plan</p>
                    <p>内容<textarea type="comment" name="plan[plan_content]" placeholder="今日やるべきことを記入してください。"></textarea></p>
                    <p>開始時間<input type="time" name="plan[plan_start_time]" style="width:80px"></p>
                    <p>取り組む時間<input type="time" name="plan[plan_times]" style="width:80px"></p>
                </div>
                <div class="frame"><a href="/execution/create">振り返りをする</a></div>
            </div>
            <div class="button frame">
                <button type="submit" value="保存">保存</button>
            </div>
        </form>
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
            
</html>