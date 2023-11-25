<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}-Contact</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           
                html,body{
                    background-color: #fff;
                    color: black;
                    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                    font-weight: 100;
                    height: 100vh;
                    margin: 0;
                }
                .full-height{
                    height: 100vh;
                }
                .flex-center{
                    align-items:center;
                    display: flex;
                    justify-content: center;
                }
                .position-ref{
                    position: relative;
                }
                .content{
                    text-align: center;
                }
                .title{
                    font-size: 40px;
                }
                .m-b-md{
                    margin-bottom: 30px;
                }
                .links>a{
                    color: #4b5563;
                    font-size: 20px;
                    padding: 0 25px;
                }
                
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <div class="content">
                <div class="title m-b-md">
                {{ config('app.name') }}-Contact
                </div>
        </div>
        </div>
    </body>
</html>
