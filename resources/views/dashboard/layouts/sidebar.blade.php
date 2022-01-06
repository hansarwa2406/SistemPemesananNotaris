<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <span data-feather="layout"></span>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text"></span>
                    Blog
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/notaries*') ? 'active' : '' }}" href="/dashboard/notaries">
                    <span data-feather="users"></span>
                    Notaris
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pendings*') ? 'active' : '' }}" href="/dashboard/pendings">
                    <span data-feather="clipboard"></span>
                    Permohonan Konsultasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/bookings*') ? 'active' : '' }}" href="/dashboard/bookings">
                    <span data-feather="clock"></span>
                    Jadwal Konsultasi
                </a>
            </li>
        </ul>

        <hr class="my-4">

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/account*') ? 'active' : '' }}" aria-current="page" href="/account">
                    <span data-feather="settings"></span>
                    Pengaturan Akun
                </a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link bg-light border-0"><span data-feather="log-out"></span> Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>