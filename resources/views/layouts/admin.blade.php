<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')

    <!-- Custom fonts for this template-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mystyle.css') }}">
    @livewireStyles

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
            <div class="sidebar-brand-icon ">
            <i class="fas fa-tachometer-alt {{-- fa-laugh-wink --}}"></i>
            </div>
            <div class="sidebar-brand-text mx-2">Find It Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Articles -->
        <li class="nav-item {{ Request::routeIs('admin.products') || Request::routeIs('admin.addproduct') || Request::routeIs('admin.editproduct') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.products') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Articles</span></a>
        </li>

        <!-- Nav Item - Category -->
        <li class="nav-item {{ Request::routeIs('admin.categories') || Request::routeIs('admin.addcategory') || Request::routeIs('admin.editcategory') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.categories') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Catégories</span></a>
        </li>

        <!-- Nav Item - Bannière -->
        <li class="nav-item {{ Request::routeIs('admin.homeslider') || Request::routeIs('admin.addhomeslider') || Request::routeIs('admin.edithomeslider') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.homeslider') }}">
            <i class="fas fa-fw fa-image"></i>
            <span>Bannières</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <hr class="sidebar-divider">

        <!-- Nav Item - Parameters -->
        <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Paramètres</span></a>
        </li>

        <!-- Nav Item - Edit profile -->
        <li class="nav-item {{-- {{ Request::routeIs('admin.categories') ? 'active' : '' }} --}}">
            <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user"></i>
            <span>Editer mon profil</span>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="#">
            </a>
        </li>


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline sidebar">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="{{ route('product.shop') }}" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-1">Menu</span><i class="fas fa-list fa-fw"></i>
                            <!-- Counter - Alerts -->
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">Menu</h6>
                            <a class="dropdown-item d-flex align-items-center" title="Accéder à la page d'acceueil" target="_blank" href="{{ route('page.home') }}">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                <i class="fas fa-home text-white"></i>
                                </div>
                            </div>
                            <div>
                                <span class="font-weight-bold">Page d'accueil</span>
                            </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" title="Parcourir la boutique" target="_blank" href="{{ route('product.shop') }}">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                <i class="fas fa-store text-white"></i>
                                </div>
                            </div>
                            <div>
                                <span class="font-weight-bold">Boutique</span>
                            </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" title="Tout savoir sur Find It" target="_blank" href="#{{-- {{ route('page.about') }} --}}">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                <i class="fas fa-store text-white"></i>
                                </div>
                            </div>
                            <div>
                                <span class="font-weight-bold">À propos</span>
                            </div>
                            </a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Username</span>
                        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Mon profil
                        </a>
                        <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Paramètres
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Se déconnecter
                        </a>
                    </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            {{ $slot }}

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Find it 2021</span>
            </div>
            </div>
        </footer>
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Prêt à te déconnecter ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">×</span>
                </button>
            </div>
            <div class="modal-body">Clique sur <strong class="text-danger">"se déconnecter"</strong> si tu souhaites quitter la session.</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Annuler</button>
                <form method="POST" class="btn btn-primary" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <span class="text-white">{{ __('Se déconnecter') }}</span>
                    </a>
                </form>
            </div>
        </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>
    @livewireScripts

</body>

</html>
