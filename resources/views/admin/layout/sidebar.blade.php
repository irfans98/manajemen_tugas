<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <i class="fas fa-tasks"></i>
        </div>
        <div class="sidebar-brand-text mx-3">M-Tugas <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{$menuDashboard ?? ''}}">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        ADMIN
    </div>

    <!-- Nav Item - users -->
    <li class="nav-item {{$menuAdminUser ?? ''}}">
        <a class="nav-link" href="{{route('user')}}">
            <i class="fas fa-users"></i>
            <span>User</span></a>
    </li>

    <!-- Nav Item - tugas -->
    <li class="nav-item {{$menuAdminTugas ?? ''}}">
        <a class="nav-link" href="{{route('tugas')}}">
            <i class="fas fa-tasks"></i>
            <span>Data Tugas</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        KARYAWAN
    </div>

    <!-- Nav Item - tugas -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-tasks"></i>
            <span>Data Tugas</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->