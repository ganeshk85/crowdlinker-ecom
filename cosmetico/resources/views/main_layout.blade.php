<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=10,IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
        
        <meta name=description content="A e-commerce shopping cart cosmetico" />
        <meta name="keywords" content="shopping, ecommerce, store, cosmetico" />
        
        <title>Cosmetico</title>
        
        <base href="/cosmetico/public/" >
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,400i,500,800,900" rel="stylesheet"> 
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <noscript><div id="noscript-wrapper">Cosmetico needs JavaScript enabled in your browser.</div></noscript>
        <div class="site-container">
            <div class="site-pusher">
                @include('partials.nav')
                @include('partials.mobile_nav')
                
                @yield('content')
                
                @include('section.footer')        
             <div class="site-cache" id="site-cache"></div>
            </div>
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
