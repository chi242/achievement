<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/plan/create.style.css'}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>
            .card{
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <div class="nav justify-content-end">
            <!--ゴールメニューボタン-->
            <div class="btn-group">
              <button class="btn btn-outline-primary btn-sm dropdown-toggle justify-content-end" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </button>
              <ul class="dropdown-menu">
                <li>goal1</li>
                <li>goal2</li>
                <li>goal3</li>
              </ul>
            </div>
            <!--ユーザーボタン（ログアウト・ホームボタン）-->
            <div class="btn-group">
              <button class="btn btn-outline-primary btn-sm dropdown-toggle justify-content-end" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                User
              </button>
              <ul class="dropdown-menu">
                <li><a href="/logout">ログアウト</a></li>
                <li><a href="/home">Home</a></li>
              </ul>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-disabled="true" href="/planlists">＞　Planlist</a>
             </li>
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">＞  編集</a>
            </li>
        </ul>
        <form action="/plans/{{ $plan->id }}}}/store" method="POST" >
        @csrf
        @method('PUT')
            <div class="container-sm card">
                <div class="form">
                        
                         <h2>
                            <?php
                            $plan = App\Models\Plan::orderby('id','desc')->first();
                             if(isset($plan['selected_date'])){
                                echo $plan['selected_date'];
                             }
                            ?>
                         </h2>
                          <label for="floatingTextarea" class="form-label">内容</label>
                          <textarea class="form-control" placeholder="今日やるべきことを記入してください。" id="floatingTextarea" name="plan[plan_content]" required></textarea>
                          <label for="floatingInput" class="form-label">開始時間</label>
                          <input type="time" class="form-control" id="floatingInput" name="plan[plan_start_time]" style="width:100px" required>
                          <label for="floatingPassword" class="form-label">取り組む時間</label>
                          <input type="time" class="form-control" id="floatingPassword" name="plan[plan_times]" style="width:100px" required>
                </div>
            </div>
            <div class="button frame">
                <button type="submit" class="btn btn-outline-primary" value="保存">保存</button>
            </div>
            </form>
            <div class="back">[<a href='/'>Home</a>]</div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>