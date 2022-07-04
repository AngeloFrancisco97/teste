<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="sortcut icon" href="https://angelofrancisco.site/storage/imagens/angelo.ico" type="image/x-icon"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Angelo Francisco</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/b11c4b137e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .nav-bar-edit {
            background-color: rgba(0,0,0,0.2)!important;
            position: absolute;
            width: 100%;
        }
        @media (max-width: 600px)
        {
            .nav-bar-edit{
                background-color:#263238!important;
            }
        }

        /*footer*/
        .col_white_amrc { color:#FFF;}
        footer { width:100%; background-color:#263238; padding:10px 0px 25px 0px ;}
        .pt2 { padding-top:40px ; margin-bottom:20px ;}
        footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
        .mb10 { padding-bottom:15px ;}
        .footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
        .footer_ul_amrc li {padding:0px 0px 5px 0px;}
        .footer_ul_amrc li a{ color:#CCC;}
        .footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
        .fleft { float:left;}
        .padding-right { padding-right:10px; }

        .footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
        .footer_ul2_amrc li p { display:table; }
        .footer_ul2_amrc li a:hover { text-decoration:none;}
        .footer_ul2_amrc li i { margin-top:5px;}

        .bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
        .foote_bottom_ul_amrc {
            list-style-type:none;
            padding:0px;
            display:table;
            margin-top: 10px;
            margin-right: auto;
            margin-bottom: 10px;
            margin-left: auto;
        }
        .foote_bottom_ul_amrc li { display:inline;}
        .foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

        .social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
        .social_footer_ul li { padding:10px; padding-top:10px; float:left; }
        .social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
        .social_footer_ul li i {  width:20px; height:20px; text-align:center;}
    </style>

</head>
<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
