<!DOCTYPE html>
<html>
    <head>
        <title>tongchuan's site</title>


        <style>
            li{
                list-style: none;
            }
            html, body {
                height: 100%;
            }
            a,a:hover,a:active,a:link,a:focus{
                text-decoration: none;
                color: #666;
                outline: none;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .nav{
                text-align: left;
            }
            .nav li{
                display: inline-block;
                box-sizing:border-box;
                height: 24px;
                line-height: 24px;
             }
            .nav li:hover{
                border-bottom: 1px solid #666;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <ul class="nav">
                <li><a href="{{ route('articles.index') }}">articles</a></li>
            </ul>   
            <div class="content">
                <div class="title">Weclome</div>
            </div>
        </div>
    </body>
</html>
