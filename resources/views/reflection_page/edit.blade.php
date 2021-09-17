<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>振り返りの編集画面</title>
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
        @if($reflection)
        <div class="reflection">
            <form action="/reflection_page/{{$reflection->id}}/store" method="POST">
             @csrf 
             @method('PUT')
                <div class="date"><h2>{{$reflection->created_at->format('Y年m月d日')}}</h2></div>
                <div class="reflection item">
                振り返り
                    <textarea type="comment" name="reflections[reflection]">{{$reflection->reflection }}</textarea>  
                </div>
                <div class="item">
                    <p>達成度</p>
                    <select name="reflection[evaluation]">
                        <option value=1>1</button>
                        <option value=2>2</button>
                        <option value=3>3</button>                        
                        <option value=4>4</button>
                        <option value=5>5</button>
                    </select>

                </div>
                <button type="submit" value="更新">更新</button>
            </form>
        </div>
        <div class="back">[<a href='/reflections/{{ $reflection->id }}'>Back</a>]</div>
        @endif
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>