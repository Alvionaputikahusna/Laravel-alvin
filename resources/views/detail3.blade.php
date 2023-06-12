<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>e-sport</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/modals/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">




    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }
    </style>


</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>


    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <!-- <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"
                        role="img"> -->
                <title>E-SPORT</title>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                    fill="currentColor"></path>
                </svg>
                <span class="fs-4">E-SPORT</span>
                </a>
            </header>

            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Kurash </h1>
                    <p class="col-md-8 fs-4">Kurash adalah seni bela diri tradisional yang berasal dari Uzbekistan. Ini
                        adalah bentuk bela diri yang menggabungkan teknik lempar, pegangan, dan gulat. Kurash telah
                        menjadi olahraga yang populer di Uzbekistan dan juga telah diakui oleh Komite Olimpiade
                        Internasional sebagai cabang olahraga.

                        Dalam pertandingan Kurash, dua peserta bertarung dalam arena lingkaran dan berusaha untuk
                        menjatuhkan lawan mereka ke tanah atau mendapatkan pegangan yang mengendalikan mereka. Teknik
                        yang digunakan dalam Kurash meliputi lemparan, pegangan, dan berbagai gerakan gulat. Peserta
                        juga menggunakan pakaian khusus yang disebut "kurtka", yang membantu dalam melaksanakan
                        teknik-teknik Kurash.

                        Skor dalam Kurash diberikan berdasarkan teknik yang berhasil dilakukan oleh peserta, seperti
                        lemparan yang efektif, pegangan yang kuat, atau mengendalikan lawan di tanah. Pertandingan
                        Kurash diatur dengan aturan tertentu dan memperhatikan keamanan peserta.</p>
                </div>
            </div>

            <!-- membuat navbar -->
            <header data-bs-theme="dark">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <div class="container-fluid">
                        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                            <svg class="bi" width="40" height="32" role="" aria-label="">
                                <use xlink:href="#" />
                                <h3>E-SPORT</h3>
                            </svg>
                        </a>
                        <div class="col-md-3 mb-2 mb-md-0">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="komunitas">Community</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="help">Helps</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </nav>
            </header>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg-dark rounded-3">
                        <h2>Pertandingan</h2>
                        <p>1. Kejuaraan Dunia Kurash: Kejuaraan Dunia Kurash adalah acara terbesar dan paling bergengsi
                            dalam Kurash. Kejuaraan ini diadakan setiap dua tahun sekali dan melibatkan partisipasi
                            atlet-atlet terbaik dari berbagai negara di seluruh dunia.</p>

                        <p>2. Piala Dunia Kurash: Piala Dunia Kurash adalah serangkaian turnamen internasional yang
                            diadakan di berbagai negara. Acara ini menarik peserta dari berbagai negara untuk bersaing
                            dalam kategori berat dan usia yang berbeda.</p>

                        <p>3. Kejuaraan Benua: Di setiap benua, seperti Asia, Eropa, dan Amerika, diadakan Kejuaraan
                            Benua
                            Kurash. Acara ini memungkinkan para atlet regional untuk bersaing dan memperebutkan gelar
                            juara benua.</p>

                        <p>4. Kejuaraan Nasional: Setiap negara memiliki kejuaraan nasional mereka sendiri di bidang
                            Kurash. Ini adalah event penting di tingkat nasional, di mana atlet-atlet dari berbagai
                            daerah bersaing untuk memenangkan gelar nasional.</P>

                        <p>5. Turnamen Internasional: Selain kejuaraan besar, ada juga banyak turnamen internasional
                            lainnya yang diadakan di berbagai negara. Ini dapat mencakup turnamen invitasional,
                            pertandingan persahabatan, atau seri kompetisi yang melibatkan peserta dari berbagai negara.
                        </p>

                        <p>6. Festival Olahraga: Festival olahraga sering kali menjadi kesempatan untuk memperkenalkan
                            dan
                            mempromosikan Kurash. Dalam festival olahraga tersebut, pertandingan Kurash, pertunjukan
                            budaya, dan kegiatan terkait lainnya diadakan untuk menghibur penonton dan mempromosikan
                            olahraga ini.</p>

                        <p>7. Acara Pendekatan Budaya: Kadang-kadang, acara-acara budaya seperti pameran seni,
                            pertunjukan
                            tari, dan pertunjukan musik tradisional juga dapat mencakup pertunjukan Kurash sebagai
                            bagian dari rangkaian acara.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                        <h2>Latihan</h2>
                        <p>1. Pemanasan: Sebelum memulai latihan Kurash, penting untuk melakukan pemanasan untuk
                            mempersiapkan tubuh. Ini dapat mencakup peregangan, gerakan rotasi sendi, dan latihan
                            kardiovaskular ringan untuk meningkatkan sirkulasi darah dan mempersiapkan otot-otot untuk
                            latihan yang lebih intensif.</p>

                        <p>2. Teknik Dasar: Latihan teknik dasar adalah bagian penting dari latihan Kurash. Ini
                            melibatkan
                            pembelajaran dan pengulangan gerakan dasar seperti melempar, menangkap, menjatuhkan lawan,
                            dan mengunci lawan. Latihan teknik dilakukan secara berulang untuk memperbaiki teknik,
                            kelincahan, dan koordinasi.</p>

                        <p>3. Latihan Kebugaran: Kekuatan dan kebugaran fisik penting dalam Kurash. Latihan kebugaran
                            termasuk latihan beban tubuh, latihan kardiovaskular, dan latihan kekuatan seperti angkat
                            beban, push-up, sit-up, lari, dan loncat. Ini membantu meningkatkan daya tahan, kekuatan,
                            dan kecepatan dalam melaksanakan teknik Kurash.</p>

                        <p>4. Latihan Kumite: Kumite adalah latihan tempur atau sparring dalam Kurash. Dalam latihan
                            ini,
                            dua pesilat saling berhadapan untuk mengaplikasikan teknik Kurash secara praktis. Ini
                            melibatkan latihan serangan, pertahanan, dan kontra serangan dalam situasi yang lebih
                            realistis.</p>

                        <p>5. Latihan Ketangkasan: Latihan ketangkasan digunakan untuk meningkatkan fleksibilitas,
                            kelincahan, dan refleks dalam Kurash. Ini melibatkan latihan seperti lompat tali, latihan
                            keseimbangan, dan latihan gerakan kaki untuk meningkatkan kecepatan dan ketepatan gerakan.
                        </p>

                        <p>6. Latihan Strategi dan Taktik: Selain latihan fisik, penting juga untuk melatih strategi dan
                            taktik dalam Kurash. Ini melibatkan berlatih membaca dan merespons gerakan lawan,
                            mengembangkan rencana pertandingan, dan berlatih teknik adaptasi dalam situasi yang berbeda.
                        </p>
                        </p>
                    </div>
                </div>
            </div>

            <footer class="pt-3 mt-4 text-body-secondary border-top">
                &copy; 2023
            </footer>
        </div>
    </main>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>