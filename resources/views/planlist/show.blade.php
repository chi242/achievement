<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Planリスト記入済</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/review/create.style.css'}}" rel="stylesheet">
    </head>
    <body>
        <p>Planリスト記入済</p>
        <a href="/executions/{{ $plan->id }}/edit">振り返りの編集</a>
    </body>
</html>