<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/plan/create.style.css'}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
        <form action="/plans" method="POST" >
         @csrf 
            <div class="form">
                @if($plan)
                <h2>{{$plan->selected_at}}</h2>
                @endif
                    <p>Plan</p>
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="今日やるべきことを記入してください。" id="floatingTextarea" name="plan[plan_content]"></textarea>
                      <label for="floatingTextarea">内容</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="time" class="form-control" id="floatingInput" placeholder="開始時間" name="plan[plan_start_time]">
                      <label for="floatingInput">開始時間</label>
                    </div>
                    <div class="form-floating">
                      <input type="time" class="form-control" id="floatingPassword" placeholder="取り組む時間" name="plan[plan_times]">
                      <label for="floatingPassword">取り組む時間</label>
                    </div>
                    
                </div>
                <div class="frame"><a href="/execution/create">振り返りをする</a></div>
            </div>
            <div class="button frame">
                <button type="submit" class="btn btn-outline-primary" value="保存">保存</button>
            </div>
        </form>
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>