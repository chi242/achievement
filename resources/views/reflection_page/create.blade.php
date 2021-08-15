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
        <form action="/reflection_pages" method="POST" >
         @csrf 
            <div class="form">
                @if($plan)
                <h2>{{$plan->created_at}}</h2>
                @endif
                <div class="frame">
                    <p>振り返り</p>
                    <label for="floatingTextarea" class="form-label">内容</label>
                    <textarea class="form-control" name="reflection_content" placeholder="今日のできたことやできなかったことを記入してください。" id="floatingTextarea" required></textarea>  
                </div>
                <div>
                    <label for="floatingInput" class="form-label">開始した時間</label>
                    <input type="time" class="form-control" name="reflection_start_time" style="width:80px" required>
                </div>
                <div>
                    <label for="floatingPassword" class="form-label">取り組んだ時間</label>
                    <input type="time" class="form-control" name="reflection_times" style="width:80px" required>
                </div>
                <div class="frame">
                    <p>達成度</p>
                    <select name="status" required>  
                        <option value=1>1</button>
                        <option value=2>2</button>
                        <option value=3>3</button>                        
                        <option value=4>4</button>
                        <option value=5>5</button>
                    </select>
                </div>
            </div>
            <div class="button frame form">
                <button type="submit" value="保存">保存</button>
            </div>
        </form>
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>
