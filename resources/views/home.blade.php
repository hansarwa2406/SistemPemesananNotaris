@extends('layouthome.main')

@section('container')
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <img src="assets/img/notary.png" alt="" class="home__img">

                <div class="home__data">
                    <h2 class="home__title">
                        Notarisku</h2>
                        <h3> Sistem Penjadwalan Konsultasi dengan Notaris </h3> <br> <hr>
                        
                        <h2> By Tety Andriani S.H</h2>
                    
                    <p class="home__description">
                        
                    </p>
                    <a href="#about" class="button button--flex">
                        Explore <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>

                <div class="home__social">
                    <span class="home__social-follow">Follow Us</span>

                    <div class="home__social-links">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section container" id="about">
            <div class="about__container grid">
                <img src="assets/img/notary_2.png" alt="" class="about__img">

                <div class="about__data">
                    <h2 class="section__title about__title">
                        Mengenai Notarisku by <br> Notaris Tety Andriani
                    </h2>

                    <p class="about__description">
                        Kami merupakan Profesional Notaris dan Komisioning Dokumen Online Maupun Offline yang efisien, aman, dan cepat serta dipercaya dalam menanggani kebutuhan terkait kenotariatan anda.
                    </p>

                    <div class="about__details">
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Kami melayani masyarakat dalam hal pembuatan akta autentik.
                        </p>
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Kami menjamin kerahasiaan data anda secara hukum yuridis.
                        </p>
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Kami melayani layanan konsultasi secara online dan offline.
                        </p>
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Kami memberikan kenyaman, kecepatan, dan kemudahan dalam penjadwalan dan pembuatan dokumen.
                        </p>
                    </div>

                    <a href="#" class="button--link button--flex">
                        Menjadwalkan Pertemuan <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== STEPS ====================-->
        <section class="steps section container" >
            <div class="steps__bg">
                <h2 class="section__title-center steps__title">
                    Layanan Kami <br> 
                </h2>

                <div class="steps__container grid">
                    <a href="/schedules" class="nav__link">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Jadwal Konsultasi</h3>
                            <p class="steps__card-description">
                                Buat jadwal konsultasi anda dengan notaris kami.
                            </p>
                        </div>
                    </a>

                    <a href="/post" class="nav__link">
                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Blog Notaris</h3>
                            <p class="steps__card-description">
                                Berita dan informasi mengenai kenotariatan.
                            </p>
                        </div>
                    </a>

                    <a href="/chats" class="nav__link">
                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Ruang Diskusi</h3>
                            <p class="steps__card-description">
                                Anda dapat berdiskusi dengan orang lain dan notaris terkait kenotariatan
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== PRODUCTS ====================-->
        <section class="product section container" id="products">
            <h2 class="section__title-center">
                Layanan Kami <br> 
            </h2>

            <p class="product__description">
                Disini kami menyediakan beberapa layanan terkait kenotariatan untuk membantu permasalahan anda.
            </p>

            <div class="product__container grid">
                <article class="product__card">
                    {{-- <div class="product__circle"></div> --}}

                    <img src="assets/img/klien.png" alt="" class="product__img">

                    <h3 class="product__title">Klien CRUD</h3>
                    <span class="product__price"></span>

                        <button class="button--flex product__button"><a href="/dashboard/klien">
                        <i class="ri-shopping-bag-line"></i></a>
                    </button> 
                </article>

                <article class="product__card">
                    {{-- <div class="product__circle"></div> --}}

                    <img src="assets/img/notaris.png" alt="" class="product__img">

                    <h3 class="product__title">Notaris CRUD</h3>
                    <span class="product__price"></span>

                    <button class="button--flex product__button"><a href="/dashboard/sisw">
                        <i class="ri-shopping-bag-line"></i></a>
                    </button> 
                </article>

                <article class="product__card">
                    {{-- <div class="product__circle"></div> --}}

                    <img src="assets/img/booking.png" alt="" class="product__img" >

                    <h3 class="product__title">Booking CRUD </h3>
                    <span class="product__price"></span>

                        <button class="button--flex product__button"><a href="/dashboard/booking">
                        <i class="ri-shopping-bag-line"></i></a>
                    </button> 
                </article>

                
                <!-- <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="assets/img/product4.png" alt="" class="product__img">

                    <h3 class="product__title">Succulent Plant</h3>
                    <span class="product__price">$5.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="assets/img/product5.png" alt="" class="product__img">

                    <h3 class="product__title">Succulent Plant</h3>
                    <span class="product__price">$10.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="assets/img/product6.png" alt="" class="product__img">

                    <h3 class="product__title">Green Plant</h3>
                    <span class="product__price">$8.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article> -->
            </div>
        </section> 

        <!--==================== QUESTIONS ====================-->
        <section class="questions section" id="faqs">
            <h2 class="section__title-center questions__title container">
                Beberapa Pertanyaan <br> Terkait Kenotariatan
            </h2>

            <div class="questions__container container grid">
                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Ada hukum apa saja untuk mengurus pembagian ahli waris ?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Ada 2 hukum yaitu pembagian secara islam dan secara hukum perdata negara.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Berapa modal untuk membuat akta jual beli ?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Modal untuk membuat akta jual beli sebetulnya tergantung lagi pada harga tanah yang ingin dibeli sehinggi cukup fleksibel untuk harga bagi setiap notaris.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Dimana sertifikat diurus oleh notaris ?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Sertifikat diproses dengan pengajuan ke BPN ( Badan Pertanahan Nasional).
                            </p>
                        </div>
                    </div>
                </div>

                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Tanda Tangan AJB apakah harus dilakukan oleh pemegang hak ?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Tanda Tangan AJB bisa dilakukan oleh pemegang hak atau dilakukan melalui kuasa dengan catatan kuasa tersebut harus otentik dan dipastikan kuasa tersebut benar diberikan oleh orang yang berwenang.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Apakah masih boleh memesan nama dengan awalan himpunan. jaringan, atau ikatan ?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Secara sistem maka hal tersebut akan ditolak yang dimana bisa kita lihat syarat nama perkumpulan pada Pasal 4 ayat 1 huruf g Permenkumham Nomor 10 Tahun 2019.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Berkas apa saja yang perlu saya siapkan?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Untuk berkas dokumen biasanya akan diberitahu setelah melakukan konsultasi dengan notaris jadi anda hanya perlu datang berkonsultasi seperti biasa untuk konsultasi pertama.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section container" id="contact">                
            <div class="contact__container grid">
                <div class="contact__box">
                    <h2 class="section__title">
                        Segera hubungi kami  <br> untuk konsultasi <br> lebih lanjut
                    </h2>

                    <div class="contact__data">
                        <div class="contact__information">
                            <h3 class="contact__subtitle">Layanan Telepon</h3>
                            <span class="contact__description">
                                <i class="ri-phone-line contact__icon"></i>
                                No. Telp : +62 819-0597-2540
                            </span>
                        </div>

                        <div class="contact__information">
                            <h3 class="contact__subtitle">Layanan E-mail</h3>
                            <span class="contact__description">
                                <i class="ri-mail-line contact__icon"></i>
                                andriandanul@gmail.com
                            </span>
                        </div>
                    </div>
                </div>

                <form action="/dashboard/pendings/" method="POST" class="contact__form">
                    <div class="contact__inputs">
                        <div class="contact__content">
                            <input type="email" placeholder=" " class="contact__input" id="email" name="email">
                            <label for="email" class="contact__label">Email</label>
                        </div>

                        <div class="contact__content">
                            <input type="text" placeholder=" " class="contact__input" id="phone" name="phone">
                            <label for="phone" class="contact__label">Nomor Telepon / WA (081x)</label>
                        </div>

                        <div class="contact__content">
                            <input type="text" placeholder=" " class="contact__input" id="subject" name="subject">
                            <label for="subject" class="contact__label">Subjek</label>
                        </div>

                        <div class="contact__content contact__area">
                            <textarea name="message" placeholder=" " class="contact__input" id="message" name="message"></textarea>                              
                            <label for="message" class="contact__label">Pesan</label>
                        </div>
                    </div>

                    <button class="button button--flex" type="submit">
                        Kirim Pesan
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </form>
            </div>
        </section>
    </main>
@endsection