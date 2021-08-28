<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/reflection/create.style.css'}}" rel="stylesheet">
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
                <li><a href="/logout">ログアウト</a></li>
                <li><a href="/home">Home</a></li>
              </ul>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/planlists">Planlist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">＞  Planの振り返り</a>
             </li>
        </ul>
        <div class="container-sm card">
            <div class="form">
                <form action="/reflection_pages" method="POST" >
                 @csrf 
                    <div class="form">
                        @if($plan)
                        <h2>{{$plan->selected_at}}</h2>
                        @endif
                        <div class="frame">
                            <p>振り返り</p>
                            <label for="floatingTextarea" class="form-label">内容</label>
                            <textarea class="form-control" name="reflection_content" placeholder="今日のできたことやできなかったことを記入してください。" id="floatingTextarea" required></textarea>  
                        </div>
                        <div>
                            <label for="floatingInput" class="form-label">開始した時間</label>
                            <input type="time" class="form-control" name="reflection_start_time" style="width:100px" required>
                        </div>
                        <div>
                            <label for="floatingPassword" class="form-label">取り組んだ時間</label>
                            <input type="time" class="form-control" name="reflection_times" style="width:100px" required>
                        </div>
                        <div class="frame">
                            <p>達成度</p>
                            <select name="status" required>  
                                <option value=0>0</button>
                                <option value=10>10</button>
                                <option value=20>20</button>                        
                                <option value=30>30</button>
                                <option value=40>40</button>
                                <option value=50>50</button>
                                <option value=60>60</button>
                                <option value=70>70</button>                        
                                <option value=80>80</button>
                                <option value=90>90</button>
                                <option value=100>100</button>
                            </select>
                        </div>
                    </div>
                    <div class="button frame form m-3">
                        <button type="submit" class="btn btn-outline-primary" value="保存">保存</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>
