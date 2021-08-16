<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>目標</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../assets/css/index.style.css'}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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
                <?php
                if($goal){
                ?>
                <div class="maingoal">{{$goal->maingoal}}</div>
                <?php
                }else{
                echo 'Maingoalは未設定です。';
                }
                ?>
            </div>
            <!--選択カレンダー-->
            <div id='app'>
                <form action="/selected_date" method="POST">
                    @csrf
                    <lavel for="floatingInput" class="form-label">日付選択<input type="date" class="form-control" name="selected_date" max="9999-12-31" required></lavel>
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
                
                    
                    <a href="plans/create"></a>
                </table>
                <div>
                    <p class="TodayRecord"><a href="/plans/create">今日の記録(plan)</a></p>
                    <p class="TodayRecord"><a href="/reflection_pages/create">今日の振り返り(reflection)</a></p>
                </div>
            </div>
            

            </div>
        </div> 
        <script src="../../assets/js/index.js" type="text/javascript"></script>
        <script src="../../assets/js/index-percentage.js" type="text/javascript"></script>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>

