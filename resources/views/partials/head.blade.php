<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Galerie Elda | @yield('title',"Avec la galerie ELDA, la vrai vie commence à l'intérieur")</title>
    <meta name="theme-color" content="#0f2b46" />
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
    @yield('meta')
    <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="{{asset('storage/assets/vendor/bootstrap-5.3.0/css/bootstrap.min.css')}}">
        <link rel="stylesheet"  href="{{asset('storage/assets/vendor/simplelineicons/css/simple-line-icons.min.css')}}"/>        
        <link rel="stylesheet" href="{{asset("storage/assets/vendor/lightbox2/css/lightbox.min.css")}}" />
        <link rel="stylesheet"  href="{{asset('storage/assets/css/style.min.css')}}"/>
        
        <meta name="description" content="Nos articles sont les moins chers du marché. Nous misons sur le commerce de proximité en réduisant les coûts. Livraison rapide. Nous vous livrons le plus" />
        @yield('stylesheet')
</head>
