<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', "Home")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://github.com/jgthms/bulma/blob/master/css/bulma.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact us</a></li>
        <li><a href="/about">About us</a></li>
    </ul>
    @yield('content');
</body>
</html>