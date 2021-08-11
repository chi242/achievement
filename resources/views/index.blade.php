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
            <div class="navhome"><h2><a class="mousenav" href="/">Home</a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/goals"> 目標データ </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/planlists"> Planリスト </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/datas"> 分析 </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/reminders"> リマインダー </a></h2></div>
        </nav>
        <div class="main">
            <div class="container-calendar">
                <h3>maingoal</h3>
                @if($goal)
                <div class="maingoal">{{$goal->maingoal}}</div>
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
            <!--選択カレンダー-->
            <div id='app'>
                <form action="/dates" method="POST">
                    @csrf
                    <input type="date" name="date[selected_date]" max="9999-12-31" value={{$plan->selected_date}}　required>
                    <input type ="submit" value="登録"/>
                </form>
            </div>
                <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
                <script>
                new Vue({
                    el: '#app'
                    methods: {
                    onSelect: function() {
                    console.log('選択されました')
                 })
                </script>
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
                    
                    <a href="plans/create"></a>
                </table>
                <div>
                    <p class="TodayRecord"><a href="/plans/create">今日の記録(plan)</a></p>
                    <p class="TodayRecord"><a href="/executions/create">今日の振り返り(execution)</a></p>
                </div>
            </div>
            

            </div>
        </div> 
        <script src="../../assets/js/index.js" type="text/javascript"></script>
        <script src="../../assets/js/index-percentage.js" type="text/javascript"></script>
    </body>
</html>

