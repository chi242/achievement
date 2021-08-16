<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記録</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/reflection/show.style.css'}}" rel="stylesheet">
    </head>
    <body>
        
        @if($plan)
        <div class="plan" method="post">
            <form action="/reflection_pages/{{ $plan->id }}" id="form_{{ $plan->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                
                <div class="date"><h2>{{$plan->selected_date}}</h2></div>
                <div>
                    <div class="reflection item">
                        <p>Plan：{{$plan->plan_content}}</p>
                    </div>
                    <div class="item">
                        <p>振り返り:{{$plan->reflection_content}}</p>
                    </div>
    
                    <div class="button">
                        <p><a href="/reflection_pages/create">振り返りを書く</a></p>
                        <input type="submit" value="削除"/> 
                    </div>
                </div>
            </form>
        </div>
        @endif
        <script>
            console.log("hello");
        </script>
        <div class="back">[<a href='/'>Home</a>]</div>
    </body>
            
</html>