<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cBqVbqk3F5sib9xrbzF6dhxkYY5bPb1SboF2F1n9zfuLZjX1uxbIogHwX2BohjD" crossorigin="anonymous"></script>
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--TITLE-->
    <title>E-TICKET</title>
    <!--STYLE CSS/BOOSTRAP-->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                    hsl(218, 41%, 35%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%),
                radial-gradient(1250px circle at 100% 100%,
                    hsl(218, 41%, 45%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .btn-primary:active {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-primary:hover {
            background-color: #ad1fff;
            border-color: #ad1fff;
        }

        .btn-primary:focus {
            background-color: #ad1fff;
            border-color: #ad1fff;
            box-shadow: 0 0 0 0.25rem rgba(173, 31, 255, 0.5);
        }

        .btn-primary:active {
            background-color: #44006b;
            border-color: #44006b;
        }

        .text-white {
            color: white !important;
        }

        /* Adjusted styles for a smaller form card */
        .card {
            border: none;
            background: none;
        }

        .card-body {
            padding: 10px;
        }

        .form-label {
            font-size: 14px;
        }

        .form-control {
            padding: 8px;
            font-size: 14px;
        }

        .btn-primary {
            font-size: 14px;
            padding: 8px;
        }

        /* New styles */
        .profile-dropdown {
            margin-right: 100px;
            margin-left: auto;
            margin-top: 18px;
        }

        .nav-link:hover {
            color: #007bff !important;
        }
    </style>
</head>

<body>
    <!--NAVBAR-->
    @include('layout.navbar')
    <!--ISI  HALAMAN-->
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <!--FORM PENGISIAN PENGADUAN-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('createTicket') }}" method="POST">
                    @csrf
                    <h2>Kategori</h2>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori" required>
                            <option value="Akun">Akun</option>
                            <option value="Aplikasi">Aplikasi / Website</option>
                            <option value="Aplikasi">Jaringan</option>
                        </select>
                    </div>
                    <h2>Layanan</h2>
                    <div class="mb-3">
                        <label for="layanan" class="form-label">Layanan</label>
                        <select class="form-select" id="layanan" name="layanan" required>
                            <option value="e-budgeting">E-Budgeting</option>
                            <option value="sabk">SABK</option>
                        </select>
                    </div>  
                    <h2>Isi Aduan</h2>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul </label>
                        <input type="judul" name="judul" class="form-control" id="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="5" required></textarea>
                    </div>

                    <button class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <!--FOOTER NAVIGATOR BOTTOM-->
    <div class="bottomnavbar text-center pt-5 pb-5" style="color: white;">
        <i class="fas fa-phone-alt">E-TICKET 2024</i>
    </div>

    <!--SCRIPT  POP UP DAN DROPDOWN MENU-->
    <script>
        function onKirim() {
            alert("Pesan telah dikirim!");
        }

        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("show");
        }

        function onKirim() {
            alert("Pengadaduan Berhasil Di Kirim");
        }
    </script>
    </section>

</body>
</html>