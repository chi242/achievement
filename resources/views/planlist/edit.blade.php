<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Planリスト編集</title>
        <!-- Fonts -->
        <link href="secure_asset{{'../../../assets/css/review/create.style.css'}}" rel="stylesheet">
    </head>
    <body>
        <p>Planリスト編集</p>
        <a href="/plans/1{{ $plan->id }}/edit">編集</a>
        <a href={{ route('reflection_page.create') }}>振り返りを書く</a>
    </body>
</html>
{{ $plan->id }}