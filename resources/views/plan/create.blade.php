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
                <!--ログアウトボタン-->
                <li><a href="/logout">ログアウト</a></li>
                <!--Homeボタン-->
                <li><a href="/home">Home</a></li>
              </ul>
            </div>
        </div>
        <!--ナビゲーション-->
        <ul class="nav">
            <!--ホームに遷移するリンク-->
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">＞  Plan</a>
             </li>
        </ul>
        <div class="col-md-6 offset-md-3">
            <!--Planの入力フォーム-->
            <div class="form card m-4 p-4">
                <!--選択した日を表示する-->
                <h2>{{ $plan->selected_date->format('Y年m月d日') }}</h2>
                <form action="/plans" method="POST" >
                @csrf
                    <div class="form card m-4 p-4">
                        <!--Planの内容記入欄-->
                        <div class="p-1 m-1">
                            <label for="floatingTextarea" class="form-label">内容</label>
                            <textarea class="form-control" placeholder="今日やるべきことを記入してください。" id="floatingTextarea" name="plan[plan_content]" required></textarea>
                        </div>
                        <!--Planの開始時間記入欄-->
                        <div class="p-1 m-1">
                            <label for="floatingInput" class="form-label">開始時間</label>
                            <input type="time" class="form-control" id="floatingInput" name="plan[plan_start_time]" style="width:100px" required>
                        </div>
                        <!--Planの取り組む時間記入欄-->
                        <div class="p-1 m-1">
                            <label for="floatingPassword" class="form-label">取り組む時間</label>
                            <input type="time" value="00:00" class="form-control" id="floatingPassword" name="plan[plan_times]" style="width:100px" required>
                        </div>
                    </div>
                        <!--保存ボタン-->
                        <div class="button frame form m-3">
                            <button type="submit" class="btn btn-outline-primary" value="保存">保存</button>
                        </div>
                </form>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>