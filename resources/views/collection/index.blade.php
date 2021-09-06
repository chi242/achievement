<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <p>Collection</p>
            <div class="card" id="app">
                <p>aaa</p>
                @foreach($goals as $goal)
                <div class="card m-4 p-4" id="app">
                    <p>@{{ message }}</p>
                    <p>{{$goal->maingoal}}</p>
                    <favorite onclick="checkFavorite"></favorite>
                    <p>{{$favorite_number}}</p>                
                </div>
                @endforeach
            </div>
            

        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="/js/favorite.js"></script>
</html>
    


