<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ibu</title>
    <!-- Import AdminLTE CSS -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/AdminLTE/plugins/bootstrap/css/bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/" class="brand-link">
                <span class="brand-text font-weight-light">AdminLTE</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/ibu" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Data Ibu</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2025 <a href="#">Your Company</a>.</strong>
            All rights reserved.
        </footer>
    </div>

    <!-- Import AdminLTE JS -->
    <script src="/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <script src="/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>