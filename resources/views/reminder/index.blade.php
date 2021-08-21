<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>リマインダー</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/review/create.style.css'}}" rel="stylesheet">
    </head>
    <body>
        <nav class="nav" name="first">
            <div class="navhome"><h2><a class="mousenav" href="/">Home</a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/goals"> 目標データ </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/planlists"> Planリスト </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/datas"> 分析 </a></h2></div>
            <div class="navgoal"><h2><a class="mousenav" href="/reminders"> リマインダー </a></h2></div>
        </nav>
        <div class="container-fluid" name="content">
          <div class="row">
            <!--振り返り未記入のPlanを表示-->
            <div class="col-6">
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
            <div class="col-6" name="second">
            <p>未達成のPlan</p>
              <div>
                <select onchange="return selectStatus()" name="status" required>  
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
                  var status = document.content.second.status.value;
                  console.log();
                }
              </script>
            <?php
              $all_status = $plan['status'];
              if($all_status >= 40){
              echo $plan['selected_date']."\n";
              echo $plan['plan_content'].'<br />';
              }
              }
              ?>
            </div>
          </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>