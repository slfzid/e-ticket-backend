<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--LINK CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-sOME53wYWEFqXq8iZAkY0JP7eOzmm5CFwDFq8OtABy8uPf/7a9l+IoQ5GZhZV6wSiISdqVvNbkHyi8eWfUTiJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-pVlZr+i1I/y3z5DpKiLZYsbgFOf0PeCxpoExPZFiujmaGegVyKS0Mopx9VYSX8HT4h6nGc9SUxnZMNDtk3Ho/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--TITLE -->
    <title>
        E-TICKET
    </title>
    <!--Script CDN CAPTCHA-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body style="overflow: hidden;">
    <!-- STYLE CSS-->
    <section class="background-radial-gradient overflow-hidden">
        <!--NAVBAR-->
        @include('layout.navbarGuest')
        <!--ISI HALAMAN-->
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        E-TICKET <br />
                        <span style="color: hsl(218, 81%, 75%)">Aduan Dan Layanan</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        "Komitmen kami terhadap resolusi cepat dan efektif terhadap setiap pengaduan E-TICKET.
                        Setiap laporan menjadi kesempatan bagi kami untuk memperbaiki dan memberikan layanan terbaik."
                    </p>
                </div>
                <!--FORM LOGIN -->
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                                </div>
                                <div class="form-outline mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                                </div>
                                <!--PASSWORD INPUT-->
                                <div class="form-outline mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                                <!--BUTTON REGISTRASI-->
                                <button class="btn btn-primary">Registrasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOTER NAVIGATOR BOTTOM-->
        <div class="bottomnavbar text-center pt-5 pb-5" style="color: white;">
            <i class="fas fa-phone-alt"></i> Telepon |
            <i class="fab fa-instagram"></i> Instagram | E-TICKET 2024
        </div>
    </section>
</body>
</html>