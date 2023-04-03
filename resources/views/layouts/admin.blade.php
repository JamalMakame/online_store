<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{ asset('/admin.css') }}" rel="stylesheet" />

    {{-- CSS Boostrap Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3  fixed text-white bg-dark col-5" style="width: 320px;"> <a
                href="{{ route('admin.home.index') }}" class="text-white text-decoration-none"> <span
                    class="fs-4">Admin Panel</span> </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
                <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">- Admin - Products</a>
                </li>
                <li><a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the home
                        page</a> </li>
            </ul>
        </div> <!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end"> <span class="profile-font">Admin</span> <img
                    class="img-profile rounded-circle" src="{{ asset('/storage/undraw_profile.svg') }}"> </nav>
            <div class="g-0 m-5"> @yield('content') </div>
        </div>
    </div> <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container"> <small> Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/jamalmakame"> Jamal Makame </a> </small> </div>
    </div> <!-- footer -->

    {{-- JavaScript Boostrap Link --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
</body>

</html>
