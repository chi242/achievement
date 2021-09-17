<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <head>
        <meta charset="utf-8">
        <title>作成</title>
        <!-- Fonts -->
    </head>
    <body>
        <div class="nav justify-content-end m-2">
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
            <li class="nav-item">
                <!--ホームに遷移するリンク-->
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
            <li class="nav-item">
                <!--目標データに遷移するリンク-->
                <a class="nav-link active" aria-current="page" href="/goals">＞　目標データ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">＞　目標設定</a>
             </li>
        </ul>
        <div class="col-md-6 offset-md-3">
        <!--目標データ入力フォーム-->
        <form action="/goals" method="POST">
            @csrf
        <div class="card m-4 p-4">
            <div class="form">
                <!--MainGoal記入欄-->
                <label for="floatingTextarea" class="form-label">MainGoal</label>
                <textarea class="form-control" placeholder="メインの目標を書いてください。" id="floatingTextarea" name="goal[maingoal]"/></textarea>
                <!--Measurable記入欄-->
                <label for="floatingInput" class="form-label">Measurable</label>
                <textarea class="form-control" placeholder="数字的な目標を書いてください。" id="floatingInput" name="goal[measurable]"></textarea>
                <!--Actionable記入欄-->                
                <label for="floatingPassword" class="form-label">Actionable</label>
                <textarea class="form-control" placeholder="目標にたどり着くまでのプロセスを書いてください。" id="floatingPassword" name="goal[actionable]"></textarea>
                <!--competent記入欄-->                
                <label for="floatingPassword" class="form-label">Competent</label>
                <textarea class="form-control" placeholder="目標内容が自分の価値観に基づいているかについて書いてください。" id="floatingPassword" name="goal[competent]"></textarea>
                <!--保存ボタン-->
                <div class="button frame">
                    <button type="submit" class="btn btn-outline-primary m-4" value="保存">保存</button>
                </div>
            </div>
        </div>
        </form>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>