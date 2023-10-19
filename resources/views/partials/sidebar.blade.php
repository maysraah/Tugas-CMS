<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">EM'News</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <!-- Add the "treeview-menu" class to make submenus collapsible -->
                <li class="nav-item">
                    <a href="{{ route('admin.tabel_data_world.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>World</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route ('admin.tabel_data_sport.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-futbol"></i>
                        <p>Sport</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route ('admin.tabel_data_health.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-heart"></i>
                        <p>Health</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route ('admin.tabel_data_travel.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-plane"></i>
                        <p>Travel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route ('admin.tabel_data_political.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-balance-scale"></i>
                        <p>Political</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>