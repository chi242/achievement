<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>リマインダー</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
                <style>
        　　body{
        　　font-family: 'Noto Sans JP', sans-serif;
        　　}
            .nav-home{
              background-color: #F9C0C0
            }
            .nav-goal{
              background-color: #F6D6AD
            }
            .nav-planlist{
              background-color: #FAFCC2
            }
            .nav-data{
             background-color: #CCF6C8
             }
            .nav-reminder{
            background-color: #B0EFEB
            }
            
        </style> 
    </head>
    <body>
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
      <div class="container-fluid">
        <ul class="nav nav-tabs nav-pills">
          <li class="nav-item nav-home flex-sm-fill text-sm-center">
            <a class="nav-link nav-another display-6" href="/">Home</a>
          </li>
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-one nav-goal display-6" aria-current="page" href="/goals">目標データ</a>
          </li>
          <li class="nav-item  flex-sm-fill text-sm-center">
            <a class="nav-link nav-another nav-planlist display-6" href="/planlists">Planリスト</a>
          </li>
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-another nav-data display-6" href="/analysis_pages">分析</a>
          </li>
          <li class="nav-item flex-sm-fill text-sm-center">
            <a class="nav-link nav-another nav-reminder display-6" href="/reminders">リマインダー</a>
          </li>
        </ul>
      </div>
        <div class="container-fluid" name="content">
          <div class="row">
            <!--振り返り未記入のPlanを表示-->
              <div class="col-6">
                <div class="card m-4 p-4">
                <p>振り返り未記入</p>  
                <ul id='unreflection_list'> 
                @foreach($unreflection_plans as $plan)
                <li>
                  <a id="anchor" href="reflection_pages/{{ $plan->id }}">{{$plan->plan_content}}</a>
                </li>
                @endforeach
                </ul>
                </div>
                <button id="reload" type="button" class="btn btn-outline-secondary">リロード</button>
              </div>
            
            <div class="col-6">
              <div class="card m-4 p-4">
                <div id="app" class="container">
                 <p>未達成のPlan</p>
                </div>
                  <div>達成度
                    <select id="select_status" name="status" required>  
                      <option value=0>0</option>
                      <option value=10>10</option>
                      <option value=20>20</option>                       
                      <option value=30>30</option>
                      <option value=40>40</option>
                      <option value=50>50</option>
                      <option value=60>60</option>
                      <option value=70>70</option>                        
                      <option value=80>80</option>
                      <option value=90>90</option>
                      <option value=100>100</option>
                    </select>
                  以上
                  </div>
                  <ul id="achievement_list"> 
                    @foreach($achievement_plans as $plan)
                    <li>
                      {{$plan->plan_content}}
                    </li>
                    @endforeach
                  </ul>
              
              
            </div>
          </div>
        </div>
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="/js/status.js"></script>
    <script src="/js/entry.js"></script>
    <script src="/js/unreflection.js"></script>
</html>