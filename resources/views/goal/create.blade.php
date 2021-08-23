<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <head>
        <meta charset="utf-8">
        <title>作成</title>
        <!-- Fonts -->
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
        
        <form action="/goals" method="POST">
            @csrf
        <div class="container-sm card">
            <div class="form">
            <label for="floatingTextarea" class="form-label">MainGoal</label>
                          <textarea class="form-control" placeholder="メインの目標を書いてください。" id="floatingTextarea" name="goal[maingoal]" required/></textarea>
                          <label for="floatingInput" class="form-label">Measurable</label>
                          <textarea class="form-control" placeholder="数字的な目標を書いてください。" id="floatingInput" name="goal[measurable]" required></textarea>
                          <label for="floatingPassword" class="form-label">Actionable</label>
                          <textarea class="form-control" placeholder="目標にたどり着くまでのプロセスを書いてください。" id="floatingPassword" name="goal[actionable]" required></textarea>
                          <label for="floatingPassword" class="form-label">Competent</label>
                          <textarea class="form-control" placeholder="目標内容が自分の価値観に基づいているかについて書いてください" id="floatingPassword" name="goal[competent]" required></textarea>
        <div class="button frame">
                <button type="submit" class="btn btn-outline-primary" value="保存">保存</button>
            </div>
             </div>
            </div>
        </form>
       
            <div class="back">[<a href='/'>Home</a>]</div>
        
        

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>