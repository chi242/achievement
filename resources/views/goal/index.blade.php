<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>細かいゴール</title>
        <!-- Fonts -->
        <!--<link href="secure_asset{{'../../../assets/css/goal/index.style.css'}}" rel="stylesheet">-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>
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

        <div class="btn-group">
          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </button>
          <ul class="dropdown-menu">
            <li>goal1</li>
            <li>goal2</li>
            <li>goal3</li>
          </ul>
        </div>
        <div class="btn-group">
          <button class="btn btn-secondary btn-sm" type="button">
            UserName
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            
              
              <li><a href="/logout">ログアウト</a></li>
              
            
            <li><a href="/home">Home</a></li>
          </ul>
        </div>
        <ul class="nav nav-tabs">
          <li class="nav-item nav-home">
            <a class="nav-link nav-another" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-one nav-goal" aria-current="page" href="/goals">目標データ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-another nav-planlist" href="/planlists">Planリスト</a>
          </li>
          <li class="nav-item nav-another nav-data">
            <a class="nav-link" href="/analysis_pages">分析</a>
          </li>
          <li class="nav-item nav-another nav-reminder">
            <a class="nav-link" href="/reminders">リマインダー</a>
          </li>
        </ul>
        <div class="detail">
        <?php
          $goal = \App\Models\Goal::where('user_id',Auth::id())->orderby('id','desc')->first();
          //maingoal
          if(isset($goal['maingoal'])){
        ?>
          <p>maingoal</p>
        <?php echo $goal['maingoal'];
          }
          else{
        ?>
          <p>maingoal</p>
        <?php
          echo '未設定'. '<br />';
          }
          //measurable
          if(isset($goal['measurable'])){
        ?>
          <p>measurable</p>  
        <?php 
          echo $goal['measurable'];
          }
          else{
        ?>
          <p>measurable</p>  
        <?php
            echo '未設定'. '<br />';
          }
         //actionable
          if(isset($goal['actionable'])){
        ?>
          <p>actionable</p>  
        <?php
          echo $goal['actionable'];  
          }
          else{
        ?>
          <p>actionable</p>
        <?php
        echo '未設定'. '<br />';
          }
        //competent
          if(isset($goal['competent'])){
        ?>
          <p>competent</p>
        <?php
            echo $goal['competent'];  
          }
          else{
        ?>
          <p>competent</p>
        <?php
            echo '未設定'. '<br />';
          }
        ?>
        </div>
        <div class="newgoal"><a href="/goals/create">目標を設定する</a></div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>