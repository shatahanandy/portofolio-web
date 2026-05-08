<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RuangPandang</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap-4.6.2-dist/css/bootstrap.min.css') }}">

    <!-- Bootstrap -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

        <link rel="icon" type="image/png" href="{{ asset('img/rp2.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom">

        <a class="navbar-brand brand-logo" href="/">
            <img src="{{ asset('img/rp2.png') }}" alt="Logo">
            <span>RuangPandang</span>
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/gallery">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/unggah">Unggah</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/statistik">Statistik</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>

            </ul>

        </div>

    </nav>

    <!-- ================= CONTENT ================= -->
    @yield('content')

    <!-- ================= FOOTER ================= -->
    <footer class="footer">

        <div class="container">

            <h4 class="footer-brand">RuangPandang</h4>

            <ul class="footer-nav">

                <li><a href="/">Home</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/statistik">Statistik</a></li>
                <li><a href="/contact">Contact</a></li>

            </ul>

            <div class="footer-contact">

                <p>Email: ruangpandang@gmail.com</p>
                <p>Instagram: @ruangpandang</p>

            </div>

            <p class="footer-copy">
                © 2026 RuangPandang. All rights reserved.
            </p>

        </div>

    </footer>

    <!-- JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>