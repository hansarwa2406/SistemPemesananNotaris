<!--==================== HEADER ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <a href="index.php" class="nav__logo">
            <i class="ri-leaf-line nav__logo-icon"></i> Notariku
        </a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    {{-- <a href="#home" class="nav__link active-link">Home</a> --}}
                    <a href="#home" class="nav__link active-link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">Tentang Kami</a>
                </li>
                <li class="nav__item">
                    <a href="#products" class="nav__link">Layanan Kami</a>
                </li>
                <li class="nav__item">
                    <a href="#faqs" class="nav__link">FAQs</a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">Kontak Kami</a>
                </li>

                @auth
                    <li class="nav__item">
                        <a href="/dashboard" class="nav__link"> Akun Saya</a>
                    </li>
                {{-- @else
                    <li class="nav__item">
                        <a href="/login" class="nav__link"> Login</a>
                    </li> --}}
                @endauth
            </ul>

            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>

        <div class="nav__btns">
            <!-- Theme change button -->
            <i class="ri-moon-line change-theme" id="theme-button"></i>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </div>
    </nav>
</header>