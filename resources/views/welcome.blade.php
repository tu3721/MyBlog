<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>博客</title>

    <!--1、 引入支持 Bootstrap 的 CSS 样式文件 -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
<div id="app" style="height:100%">
    <div style="height: 100%">
        <!-- 3、使用组件 -->
        <example-component></example-component>
    </div>
</div>

<!-- 2、引入支持Vue框架和Vue组件的app.js文件 -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
