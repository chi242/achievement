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
                <div class="container-sm card">
                <p>振り返り未記入</p>  
                <p> 
                <?php
                  $plan = \App\Models\Plan::where('user_id',Auth::id())->get();
                  $all_reflection_content = null;
                  foreach($plan as $plan){
                  $all_reflection_content = $plan['reflection_content'];
                  if($all_reflection_content === '未記入'){
                  echo $plan['selected_date']."\n";
                  echo $plan['plan_content']. '<br />';
                  }
                  }
                  if( empty($all_reflection_content)){
                  echo "振り返りは書いていません。";
                  }
                  elseif($all_reflection_content !== '未記入'){
                  echo "振り返りはすべて記入済です。";
                  }
                ?>
                </p>
                </div>
              </div>
            
            <div class="col-6" name="second">
              <div class="container-sm card">
                <p>未達成のPlan</p>
                  <div>達成度
                    <select id="select_status" name="status" required>  
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
                  以上
                  </div>
                  <?php
                  $plan = \App\Models\Plan::where('user_id',Auth::id())->orderby('selected_date','desc')->orderby('id','desc')->get();
                  $all_status = null;
                  foreach($plan as $plan){
                  $all_status = $plan['status'];
                  if($all_status === 0){
                  echo $plan['selected_date']."\n";
                  echo $plan['plan_content'].'<br />';
                  }
                  }
                  if($all_status === 100){
                  echo "Planはすべて達成されました！";
                  }
                  ?>
              
            

              
              <?php
              $plan = \App\Models\Plan::orderby('selected_date','desc')->orderby('id','desc')->get();
              foreach($plan as $plan){
              ?>
              <script type="text/javascript">
                function selectStatus() {
                  var status = document.getElementById("select_status").value;
                <?php
                  $all_status = $plan['status'];
                  if($all_status >= 40){
                  echo $plan['selected_date']."\n";
                  echo $plan['plan_content'].'<br />';
                  }
                  }
                  ?>   
                
              </script>
            
            </div>
          </div>
        </div>
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>