<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
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
        <div class="row">
        @if($plan)
      
        <div class="plan col-md-5 offset-md-5">
            <form action="/reflection_pages/{{ $plan->id }}" id="form_{{ $plan->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                
                <div class="date"><h2>{{$plan->selected_date}}</h2></div>
                <div>
                    <div class="reflection item">
                        <p>Plan：{{$plan->plan_content}}</p>
                    </div>
                    <div class="item">
                        <p>振り返り:{{$plan->reflection_content}}</p>
                    </div>
    
                    <div class="button">
                        <p><a href="/reflection_pages/create">振り返りを書く</a></p>
                        <p><a href="/plans/{{ $plan->id }}/edit">Planを編集する</a></p>
                        <button type="submit" class="btn btn-outline-secondary">削除</button>
                    </div>
                </div>
            </form>
        </div>
        @endif
        </div>
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>