<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Existing head content -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-TICKET</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            transition: transform 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: scale(1.05);
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        .bg-dark {
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
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>
</head>

<body style="background-color: #f8f9fa;">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <!--LOGO BPKAD-->
                    <a href='admindashboard'>
                        <img src="assets/logo bpkad.png" alt="Logo" width="100" height="40" class="navbar-brand d-inline-block align-text-top">
                    </a>
                    <!--GARIS PEMISAH SIDE BAR-->
                    <hr style="border-color: #343a40; width: 80%;">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <!--SIDEBAR-->
                        <a href="/admindashboard" class="nav-link px-0 align-middle text-light">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"></ul>

                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Menu</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="/cekdatapengaduan" class="nav-link px-0 text-light"> <span class="d-none d-sm-inline">Check Pengaduan</span></a>
                                </li>
                                <li>
                                    <a href="/jawabpengaduan" class="nav-link px-0 text-light"> <span class="d-none d-sm-inline">Jawab Pengaduan</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr style="border-color: #343a40;">
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <!--LOG OUT-->
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit" style="color: white;">Logout</button>
                            </form></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-5">
                <!-- Add date filter inputs -->
                <div class="mb-3">
                    <label for="startDate" class="form-label">Start Date</label>
                    <input type="date" id="startDate" class="form-control" placeholder="Start Date">
                </div>
                <div class="mb-3">
                    <label for="endDate" class="form-label">End Date</label>
                    <input type="date" id="endDate" class="form-control" placeholder="End Date">
                </div>
                <button id="filterButton" class="btn btn-primary">Filter</button>

                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Prioritas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="ticketList">
                        <!-- Tempat untuk menampilkan data tiket -->
                    </tbody>
                </table>

                <!-- Pagination controls -->
                <nav>
                    <ul class="pagination justify-content-center" id="pagination">
                        <!-- Pagination items will be added dynamically here -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('filterButton').addEventListener('click', () => {
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            fetchTickets(startDate, endDate);
        });

        let tickets = [];
        const ticketsPerPage = 10;
        let currentPage = 1;

        function fetchTickets(startDate = '', endDate = '') {
            let url = new URL('{{ route('getTickets') }}');
            if (startDate && endDate) {
                url.searchParams.append('start_date', startDate);
                url.searchParams.append('end_date', endDate);
            }

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    tickets = data.tickets;
                    currentPage = 1; // Reset to first page on new filter
                    renderTable();
                    renderPagination();
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        function renderTable() {
            const start = (currentPage - 1) * ticketsPerPage;
            const end = start + ticketsPerPage;
            const paginatedTickets = tickets.slice(start, end);

            const ticketListTable = document.getElementById('ticketList');
            ticketListTable.innerHTML = '';

            paginatedTickets.forEach(ticket => {
                let row = ticketListTable.insertRow();
                row.innerHTML = `
                    <td>${ticket.id}</td>
                    <td>${ticket.category_id}</td>
                    <td>${ticket.subject}</td>
                    <td>${ticket.description}</td>
                    <td>${ticket.status}</td>
                    <td>${ticket.priority}</td>
                    <td>
                        <a href="/jawabadmin" class="btn btn-primary">Jawab Pengaduan</a>
                    </td>
                `;
            });
        }

        function renderPagination() {
            const totalPages = Math.ceil(tickets.length / ticketsPerPage);
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const li = document.createElement('li');
                li.classList.add('page-item');
                if (i === currentPage) {
                    li.classList.add('active');
                }
                li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                li.addEventListener('click', (event) => {
                    event.preventDefault();
                    currentPage = i;
                    renderTable();
                    document.querySelectorAll('.page-item').forEach(item => item.classList.remove('active'));
                    li.classList.add('active');
                });
                pagination.appendChild(li);
            }
        }

        // Fetch all tickets on page load
        fetchTickets();
    </script>
</body>

</html>
