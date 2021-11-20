<!DOCTYPE html>
            <html lang="en" >
            <head>
            <meta charset="UTF-8">
            <title>UKDW</title>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'><link rel="stylesheet" href="./style.css">
            <link rel="stylesheet" type="text/css" href="/css/style.css">
            <SCRIPT src="/js/scrib.js"></SCRIPT>
            </head>
            <body>
            <!-- partial:index.partial.html -->
            <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">UKDW</a>
                    <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                    <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                        alt="User picture">
                    </div>
                    <div class="user-info">
                    <span class="user-name">Admin</span>
                    <span class="user-role">Administrator</span>
                    <span class="user-status">
                        <i class="fa fa-circle"></i>
                        <span>Online</span>
                    </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-menu">
                    <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="/admin">
                        <i class="fa fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                        <span class="badge badge-pill badge-warning"></span>
                        </a>
                        <li>
                        <a href="/surat/admin">
                        <i class="fa fa-folder"></i>
                        <span>Surat Masuk</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>Surat Keluar</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown container">
                        <button class="fa fa-book btn text-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Buat Surat
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Surat Keterangan</span>
                            <span class="badge badge-pill badge-primary"></span>
                            </a>
                            <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Surat Personalia</span>
                            <span class="badge badge-pill badge-primary"></span>
                            </a>
                            <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Surat Berita Acara</span>
                            <span class="badge badge-pill badge-primary"></span>
                            </a>
                            <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Surat Undangan</span>
                            <span class="badge badge-pill badge-primary"></span>
                            </a>
                            <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Surat Tugas</span>
                            <span class="badge badge-pill badge-primary"></span>
                            </a>
                        </div>
                        </div>
                    </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
                </div>
                <!-- sidebar-content  -->
            </nav>

            <main class="py-4">
            @yield('konten')
            </main>
