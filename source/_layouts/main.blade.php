<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->realUrl }}">
        <title>{{ $page->title }}</title>
        <meta name="description" content="{{ $page->description }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/assets/images/favicon/site.webmanifest">
        <link rel="mask-icon" href="/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://olmosrenovations.com">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:image" content="https://opengraph.b-cdn.net/production/documents/e5d45a56-a62c-4cd2-b94d-5c761aa001e1.jpg?token=4WXSHGoGraIru5Z01lQojfmyaomoZVV3inxE7VJBUdQ&height=630&width=1200&expires=33248016569">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="olmosrenovations.com">
        <meta property="twitter:url" content="https://olmosrenovations.com">
        <meta name="twitter:title" content="{{ $page->title }}">
        <meta name="twitter:description" content="{{ $page->description }}">
        <meta name="twitter:image" content="https://opengraph.b-cdn.net/production/documents/e5d45a56-a62c-4cd2-b94d-5c761aa001e1.jpg?token=4WXSHGoGraIru5Z01lQojfmyaomoZVV3inxE7VJBUdQ&height=630&width=1200&expires=33248016569">


        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z15WGTXVRT"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Z15WGTXVRT');
        </script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @include('_partials.header')
        @yield('body')
        @include('_partials.footer')
    </body>
</html>
