<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <span>
                    <img src="<?= base_url('assets/images/ende.png') ?>" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="<?= base_url('assets/images/logo.png') ?>" alt="logo-large" class="logo-lg">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topbar-nav float-right mb-0">

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="<?= base_url('assets/images/users/user-1.jpg') ?>" alt="profile-user" class="rounded-circle" />
                    <span class="ml-1 nav-user-name hidden-sm">ADMINISTRATOR <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                </div>
            </li>
        </ul>

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="button-menu-mobile nav-link waves-effect waves-light">
                    <i class="mdi mdi-menu nav-icon"></i>
                </button>
            </li>


        </ul>

    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
<div class="page-wrapper-img">
    <div class="page-wrapper-img-inner">
        <div class="sidebar-user media">
            <img src="<?= base_url('assets/images/users/user-1.jpg') ?>" alt="user" class="rounded-circle img-thumbnail mb-1">
            <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
            <div class="media-body">
                <h5 class="text-light">Hanna Amizah</h5>
                <ul class="list-unstyled list-inline mb-0 mt-2">
                    <li class="list-inline-item">
                        <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class=""><i class="mdi mdi-power text-danger"></i></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!--end page-wrapper-img-inner-->
</div>
<!--end page-wrapper-img-->