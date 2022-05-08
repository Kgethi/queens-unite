<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queens Unite - {{ $title }}</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

</head>

<header class="fixed-top">
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="row w-100">

                <div class="col-lg-7"> <a class="navbar-brand" href="{{ route('index') }}"><img
                            src="images/logo.svg" alt=""></a>
                </div>
                <div class="col-lg-5"><button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link @if ($title == 'Home') active-nav @endif"
                                    href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($title == 'About') active-nav @endif"
                                    href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($title == 'Gallery') active-nav @endif"
                                    href="{{ route('gallery') }}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($title == 'Resources') active-nav @endif"
                                    href="{{ route('resources') }}">Resources</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


        </nav>


    </div>



</header>

<body>

    <div class="container-fluid p-0">

        @yield('content')

    </div>

    <script src="/js/app.js"></script>
</body>

<footer class="p-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h2>Get in <br>Touch</h2>
                <a href="#" class="mb-5 w-100 d-block">info@queensunite.com</a>

                <p class="mb-0">Socials</p>
                <div class="row row-cols-4">
                    <div class="col"><a href="#" class = "text-left grey-link d-block">WhatsApp</a></div>
                    <div class="col"><a href="#" class = "text-left grey-link d-block">Twitter</a></div>
                    <div class="col"><a href="#" class = "text-left grey-link d-block">Instagram</a></div>
                    <div class="col"><a href="#" class = "text-left grey-link d-block">Facebook</a></div>
                </div>

            </div>
            <div class="col-lg-8 offset-lg-1">



                <form action="">

                    <input type="text" name="name" id="" placeholder="Name & Surname" class="contactFormField w-50">
                    <input type="email" name="email" id="" placeholder="Email Address" class="contactFormField">

                    <textarea name="message" id="" placeholder="Write us a message" class="contactFormField"></textarea>

                    <div class="float-end">

                        <button type="submit" class="btn text-white">Submit</button>

                    </div>

                </form>

            </div>

            <div class="col-lg-12">
                <p class="text-center mb-0">All rights reserved.</p>
            </div>
        </div>
    </div>


</footer>

</html>
