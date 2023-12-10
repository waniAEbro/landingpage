<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Dtox</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="/plugins/themify-icons/themify-icons.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="/plugins/slick/slick.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="/plugins/Venobox/venobox.css">
    <!-- aos -->
    <link rel="stylesheet" href="/plugins/aos/aos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Main Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="/images/head.png" type="image/x-icon">
    <link rel="icon" href="/images/head.png" type="image/x-icon">

    @stack('head')
</head>

<body>
    <x-navbar></x-navbar>
    @yield('content')
    <x-footer></x-footer>
    <script src="/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="/plugins/slick/slick.min.js"></script>
    <!-- venobox -->
    <script src="/plugins/Venobox/venobox.min.js"></script>
    <!-- aos -->
    <script src="/plugins/aos/aos.js"></script>
    <!-- Main Script -->
    <script src="/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @stack('script')
</body>

</html>
