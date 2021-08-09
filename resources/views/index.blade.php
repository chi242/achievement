<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>目標</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../assets/css/index.style.css'}}" rel="stylesheet">
    </head>
    <body>
        <nav class="nav">
            <div class="navhome">
                <h2>
                @if($goal)
                <div class="maingoal">{{$goal->maingoal}}</div>
                @endif
                </h2>
            </div>
            <div class="navgoal"><h2><a class="mousenav" href="/goals">細かいゴール</a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/todos">ToDoリスト</a></h2></div>
        </nav>
        <div class="main">
            <div class="container-calendar">
                <h3>maingoal</h3>
                @if($goal)
                <div class="maingoal">{{$goal->maingoal}}</div>
                @endif
            </div>
            <div>
                <div class="mousecolor" id="clickDiary" onclick="clickDiary()"></div>
                <h3>ToDo</h3>
                @if($goal)
                @foreach ($todo as $todo)
                <a href="/todos/{{ $todo->id }}">
                <div>{{$todo->created_at->format('Y年m月d日')}}</div>
                </a>
                <div>{{$todo->todolist}}</div>
                @endforeach
                @endif
            </div>   
            

            <!--達成割合表示-->
            <div id ="calculation">
            <script>
            let totalNumbers = $totalNumbers;
            let achievementNumbers = $achievemntNumbers;
            let calculation = (totalNumbers,achievementNumbers)=>{
               return achievementNumbers/totalNumbers*100;
            }
            
            let percentage = calculation($totalNumbers,$achievemntNumbers)
            console.log(percentage);
            document.write(percentage);
            </script>
            </div>
            <div>
                <form action="" method="POST">
                    <input type="date" name="calendar" max="9999-12-31">
                </form>
            </div>
                <!--月表示-->
                <div class="month" id="month">
                    <script>
                        var today = new Date();
                        var month = today.getMonth();
                        var disMonth = today.getMonth() + 1;
                        document.write(disMonth + "月");
                    </script>
                </div>

                <table class="table-calendar" id="calendar" data-lang="ja">
                    <thead id="thead-month"></thead>
                    <tbody id="calendar-body"></tbody>
                    
                    <a href="todos/create"></a>
                </table>
                <div>
                    <p class="TodayRecord"><a href="/todos/create">今日の記録(Todo)</a></p>
                    <p class="TodayRecord"><a href="/reviews/create">今日の振り返り(Review)</a></p>
                </div>
            </div>
            

            </div>
        </div> 
        <script src="../../assets/js/index.js" type="text/javascript"></script>
        <script src="../../assets/js/index-percentage.js" type="text/javascript"></script>
    </body>
</html>

