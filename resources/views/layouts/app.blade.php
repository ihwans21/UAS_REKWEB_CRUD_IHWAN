<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            min-height: 100vh;
            padding: 20px 0;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }
        .sidebar a:hover {
            background-color: #495057;
            border-radius: 5px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .table-wrapper {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar col-md-2">
            <div class="text-center mb-4">
                <h5>Pemesanan Hotel</h5>
            </div>
            <a href="{{ route('Hotel.index') }}">Dashboard</a>
            <a href="{{ route('Hotel.index') }}">Data Pemesanan Hotel</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-10">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Dashboard</a>
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/30" alt="Profile" class="rounded-circle me-2">
                        <span>User</span>
                    </div>
                </div>
            </nav>

            <div class="container mt-4">
                <div class="table-wrapper">
                    @yield('content')
                </div>
            </div>

            <footer>
                <small>2025 © Pusat Sistem Informasi</small>
            </footer>
        </div>
    </div>
</body>
</html>
