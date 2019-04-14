<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title', 'Simple Notebook')</title>
        <style>
            body{
                text-align: center;
                font-family: "Helvetica Neue",Helvetica,"PingFang SC","Hiragino Sans GB","Microsoft YaHei","微软雅黑",Arial,sans-serif;
            }
            .title{
                font-size: 40px;
                margin: 20px auto 10px;
            }
            .subtitle{
                font-size: 15px;
            }
            .note_box{
                margin: 20px 15%;
            }
            .note_title{
                color: hsl(217, 71%, 53%);
                font-size: 30px;
            }
            .update_time{
                color: gray;
                font-size: 10px;
                margin: 10px 0 0;
                text-align: right;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </head>
    <body>
        <div class="title"><a href="/">Simple Notebook</a></div>
        <div class="subtitle">一个简单的 Web 记事本应用，使用 <a href="https://laravel.com/">Laravel</a> 框架创建。</div>
        @yield('content')
    </body>
</html>