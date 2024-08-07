<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--SCRIPT CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-sOME53wYWEFqXq8iZAkY0JP7eOzmm5CFwDFq8OtABy8uPf/7a9l+IoQ5GZhZV6wSiISdqVvNbkHyi8eWfUTiJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-pVlZr+i1I/y3z5DpKiLZYsbgFOf0PeCxpoExPZFiujmaGegVyKS0Mopx9VYSX8HT4h6nGc9SUxnZMNDtk3Ho/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--TITLE -->
    <title>E-TICKET</title>


    <!--STYLE CSS-->
    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 45%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        .img-fluid {
            border-radius: 0px;
            margin-top: 0px;
        }

        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);
        }

        .profile-dropdown {
            margin-right: 100px;
            margin-left: 0;
            margin-top: 18px;
        }

        .navbar-brand {
            margin-right: auto;
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        @media (max-width: 992px) {
            .profile-dropdown {
                margin-right: 0.5rem;
            }
        }

        @media (max-width: 768px) {
            .profile-dropdown {
                margin-right: 0.2rem;
            }
        }

        @media (max-width: 576px) {
            .profile-dropdown {
                margin-right: 0;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                width: 80px;
                height: auto;
            }
        }

        @media (max-width: 480px) {
            .navbar-collapse {
                justify-content: center;
            }
        }

        @media (max-width: 380px) {
            .navbar-brand img {
                width: 70px;
            }
        }
    </style>
    <script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"1c9e1f5642d0a93ad0568cdfab7a4fd48","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
</head>

<body>
    <section class="background-radial-gradient overflow-hidden">
        <!--NAVBAR-->
        @include('layout.navbar')

        <!--GAMBAR-->
        <div class="container-fluid">
            <div class="row" style="margin-right: -15px; margin-left: -15px;">
                <div class="col-md-6 px-0">
                    <img src="assets/kotasurabaya.png" class="d-block w-100" alt="..." style="object-fit: cover; height: 50vh;">
                </div>
                <div class="col-md-6 px-0">
                    <img src="assets/kotasurabaya2.png" class="d-block w-100" alt="..." style="object-fit: cover; height: 50vh;">
                </div>
            </div>
        </div>




        <!--TEXT 1-->
        <div class="container px-2 py-5 px-md-5 text-center text-lg-start my-5" data-aos="fade-up">
            <div class="row gx-lg-1 align-items-center mb-3">
                <div class="col-lg-6 mb-5 mb-lg-5" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        E-TICKET Aduan <br />
                        <span style="color: hsl(218, 81%, 75%)">Dan Layanan</span>
                    </h1>
                </div>
                <!--TEXT 2-->
                <div class="col">
                    <h5 class="mb-1 opacity-70" style="color: hsl(218, 81%, 85%)">
                        "Komitmen kami terhadap resolusi cepat dan efektif terhadap setiap pengaduan E-TICKET. Setiap laporan menjadi kesempatan bagi kami untuk memperbaiki dan memberikan layanan terbaik."
                    </h5>
                </div>
            </div>

            <div class="row">
                <!--CARD MENU1-->
                <div class="col-md-4" data-aos="fade-right">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/pengaduan.png" class="card-img-top" alt="Your Image Alt Text" style="height:200px">
                        <div class="card-body">
                            <p class="card-text">Pengaduan</p>
                            <a href='pengaduan' class="btn btn-primary">Pengaduan</a>
                        </div>
                    </div>
                </div>
                <!--CARD MENU2 -->
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/cekpengaduan.png" class="card-img-top" alt="..." style="height:200px">
                        <div class=" card-body">
                            <p class="card-text">Cek Pengaduan</p>
                            <a href='cekpengaduan' class="btn btn-primary">Cek Pengaduan</a>
                        </div>
                    </div>
                </div>
                <!--CARD MENU3-->
                <div class="col-md-4" data-aos="fade-left">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/informasi.png" class="card-img-top" alt="..." style="height:200px">
                        <div class="card-body">
                            <p class="card-text">Tata Cara</p>
                            <a href='informasi' class="btn btn-primary">Tata Cara</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--FOOTER NAVIGATOR BOTTOM-->
            <div class="bottomnavbar text-center pt-5 pb-5" style="color: white;">
                <i class="fas fa-phone-alt">E-TICKET 2024</i>
            </div>
        </div>
    </section>
    <!-- AOS LIBARARY SCRIPT-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!--SCRIPT DROPDOWN MENU PROFILE-->
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("show");
        }
    </script>
</body>

</html>