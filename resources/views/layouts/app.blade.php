<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BQ - Buku Management</title>
    <!-- Bootstrap 4 CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- Custom CSS -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <style>
        body {
            background: #87A2FF20;
        }

        .header-section {
            background-image: url('https://binaqurani.sch.id/wp-content/uploads/2024/07/Fasilitas-BQ-Islamic-Boarding-School-Kota-Bogor-1-1-1024x683.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }

        .bg-overlay {
            background: linear-gradient(to top right, #77CDFF, #ff64ff60);
            height: 100%;
            padding: 50px;
        }

        .header-text {
            font-size: 28px;
            font-weight: bold;
        }

        .search-bar {
            margin-top: 20px;
        }

        .icon-cards {
            margin-top: 40px;
        }

        .icon-card {
            border-radius: 10px;
            background-color: #f8f9fa;
            text-align: center;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .icon-card img {
            width: 50px;
            height: 50px;
        }

        .icon-card-title {
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>

    <header class="header-section sticky">
        @yield('area-header')
    </header>

    <section class="icon-cards container mt-5">
        @yield('area-body')
    </section>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
</body>

</html>