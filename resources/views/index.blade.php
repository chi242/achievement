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
            <div class="navhome"><h2>ホーム</h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/goals">細かいゴール</h2></div>
        </nav>
        <div class="main">
            <div class="container-calendar">
                <h3>maingoal</h3>
                @if($goal)
                <div class="maingoal">{{$goal->maingoal}}</div>
                @endif
                </div>
                <div class="box"></div>
                <a href="/diaries/create">カレンダー</a>
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
                    <span class="mousecolor" href="/diaries/create"></span>
                </table>
            </div>
            
            <div class="todo">
                <h3>ToDo</h3>
                <div>
                    @if($goal)
                    @foreach ($diaries as $diary)
                    <a href="/diaries/{{ $diary->id }}"><div>{{$diary->created_at->format('Y年m月d日')}}</div></a>
                    <div>{{$diary->todo}}</div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div> 
        <script src="../../assets/js/index.js" type="text/javascript"></script>
    </body>
</html>

