 <!-- sidebar-wrapper -->
 <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{ route('user.dashboard') }}">
                <img src="/assets/imgs/logo/pp-logo.png" height="24" class="logo-light-mode" alt="">
                <img src="/assets/imgs/logo/pp-white.png" height="50" class="logo-dark-mode" alt="">
                <span class="sidebar-colored">
                    <img src="/assets/imgs/logo/pp-white.png" height="50" alt="">
                </span>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li><a href="{{ route('user.dashboard') }}"><i class="ti ti-home me-2"></i>Dashboard</a></li>
            <li class="sidebar-dropdown">

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-browser me-2"></i> Financial Operations</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="#">Fund Wallet</a></li>
                        <li><a href="#">Transfer</a></li>
                        <li><a href="#">Withdrawal</a></li>

                    </ul>
                </div>
            </li>


            <li class="">
                <a href="#"><i class="ti ti-user me-2"></i>User Profile</a>


            </li>
            
        </ul>
        <!-- sidebar-menu  -->
    </div>
    <!-- Sidebar Footer -->
    <ul class="sidebar-footer list-unstyled mb-0">


        <li class="list-inline-item mb-0">
            <form action="{{ route('logout') }}" method="post">@csrf
                <button class="btn btn-icon btn-soft-light ms-3"> <i class="ti ti-logout"></i> <small
                        class="text-muted fw-medium ms-3">Logout</small> </button>
            </form>



        </li>

    </ul>

    <!-- Sidebar Footer -->
</nav>
<!-- sidebar-wrapper  -->
