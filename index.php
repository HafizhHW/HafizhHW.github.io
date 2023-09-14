<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hafizh & Sekar Wedding</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" /> -->

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/myStyle.css" />

    <!-- simplyCountdown -->
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css" />
    <script src="countdown/simplyCountdown.min.js"></script>

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Data AOS CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" integrity="sha256-GqiEX9BuR1rv5zPU5Vs2qS/NSHl1BJyBcjQYJ6ycwD4=" crossorigin="anonymous">

    <!-- Fancy Box CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

</head>

<body>

    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <main>
            <!-- <h2>The Wedding of</h2> -->
            <div class="cropper border border-3 border-light shadow mb-4 mx-auto">
                <img src="./assets/images/spousehug.jpg" alt="bg">
            </div>
            <h1>Hafizh & Sekar</h1>
            <h3>Rabu, 31 April 2024</h3>
            <h4>Kepada Bapak/Ibu/Saudara/i,</h4>
            <h4>
                <div id="namatamu"></div>
            </h4>
            <p>Di Tempat</p>
            <p>Mohon maaf bila ada kesalahan pada penulisan nama/gelar</p>
            <!-- <p>Akan melangsungkan resepsi pernikaha dalam: </p> -->
            <!-- <div class="simply-countdown"></div> -->

            <a href="#home" class="btn btn-lg mt-4" onclick="enableScroll()"> <i class="bi bi-envelope-paper-heart"></i> Lihat Undangan</a>
        </main>
    </section>

    <!-- NavBar -->

    <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
        <div class="container">
            <a class="navbar-brand" href="#">Seha</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Seha</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#home">Home</a>
                        <a class="nav-link" href="#couple">Couple</a>
                        <a class="nav-link" href="#event">Event</a>
                        <a class="nav-link" href="#gallery">Gallery</a>
                        <a class="nav-link" href="#gift">Gift</a>
                        <a class="nav-link" href="#rsvp">RSVP</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>The Wedding of</h2>
                    <h1>Hafizh & Sekar</h1>
                    <h3>Rabu, 31 April 2024</h3>
                    <p>Maha Suci Allah yang telah menciptakan pasangan-pasangan semuanya,baik dari apa yang ditumbuhkan oleh bumi dan dari diri mereka maupun dari apa yang tidak mereka ketahui.
                        <br><br>Yasin (36:36)
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="couple" id="couple">
        <div class="container">

            <div class="row justify-content-center mx-auto text-center">
                <div class="col-lg-5 col-md-8 col-sm-10 mb-5">
                    <img class="" src="assets/images/bismillah.png" alt="">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col text-center">
                    <h3>Asslamu'alaikum Warahmatullahi Wabarakaatuh</h3>
                    <p>Dengan memohon rahmat dan ridho Allah SWT kami bermaksud menyelengarakan pernikahan puta dan putri kami:</p>
                </div>
            </div>
            <div class="row spouse">
                <div class="col-lg-6">
                    <div class="row ">
                        <div class="col-8 text-end">
                            <h3 data-aos="fade-right" data-aos-duration="1400">Hafizh Wijaya</h3>
                            <p data-aos="fade-right" data-aos-duration="1800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quae.</p>
                            <p data-aos="fade-right" data-aos-duration="2000">Putra dari Alm. Bpk Lorem <br> dan <br> Ibu Ipsum </p>
                        </div>
                        <div class="col-4" data-aos="fade-right" data-aos-duration="1200">
                            <img src="assets/images/men.jpg" alt="Hafizh" class="img-resposive rounded-circle">
                        </div>
                    </div>
                </div>


                <!-- <span class="heart"><i class="bi bi-heart-fill h1 " data-aos="zoom-out" data-aos-duration="2000"></i></span> -->


                <div class="col-lg-6">
                    <!-- <div data-aos="fade-right" data-aos-duration="2000"> -->
                    <div class="row">
                        <div class="col-4" data-aos="fade-left" data-aos-duration="2000">
                            <img src="assets/images/woman.jpg" alt="Sekar" class="img-resposive rounded-circle">
                        </div>
                        <div class="col-8">
                            <h3 data-aos="fade-left" data-aos-duration="1400">Sekar Ayu</h3>
                            <p data-aos="fade-left" data-aos-duration="1800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quae.</p>
                            <p data-aos="fade-left" data-aos-duration="2000">Putri dari Bpk Ipsum <br> dan <br> Ibu Lorem </p>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>

    <section id="event" class="event">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-8 text-center">
                    <h1 data-aos="zoom-in" data-aos-duration="1500">Save the Date</h1>
                    <h2>31 April 2024</h2>
                    <div class="simply-countdown mb-4"></div>
                    <p>Kehadiran serta doa restu Bapak/Ibu/Saudara/i merupakan suatu kebahgiaan dan kehormatan bagi kami</p>
                    <h3>Wassalamualaikum warahmatullahi wabarakatuh</h3>
                    <p class="alamat">Alamat : <br>Jl. Durian VI No.38, Lumpang, Kec. Parung Panjang, Kabupaten Bogor, Jawa Barat 16360</p>
                    <a href="https://goo.gl/maps/pYQ3Y3SeJhZVAfRZ9" target="_blank" class="btn btn-light btn-lg"><i class="bi bi-geo-alt-fill"></i> Lihat Peta</a>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-5 col-10">
                    <div class="card text-center mb-5">
                        <div class="card-header ">
                            Akad Nikah
                        </div>

                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <span class="icon"><i class="bi bi-clock-fill d-block h4"></i></span>
                                    <span>08:00 - 10:00</span>
                                </div>
                                <div class="col-md-6">
                                    <span class="icon"><i class="bi bi-calendar-heart-fill d-block h4"></i></span>
                                    <span>31 April 2024</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-5 col-10">
                    <div class="card text-center">
                        <div class="card-header ">
                            Resepsi Pernikahan
                        </div>

                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <span class="icon"><i class="bi bi-clock-fill d-block h4"></i></span>
                                    <span>10:00 - Selesai</span>
                                </div>
                                <div class="col-md-6">
                                    <span class="icon"><i class="bi bi-calendar-heart-fill d-block h4"></i></span>
                                    <span>31 April 2024</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-8 text-center">
                    <h1>Our Gallery</h1>
                </div>
            </div>

            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">

                <div class="col mt-3">
                    <a href="./assets/images/gallery/couple_1.jpg" class="fancybox" data-fancybox="OurGallery" data-caption="Couple1">
                        <img src="./assets/images/gallery/thumbnail/couple_1.jpg" alt="Couple1" class="img-fluid w-100 rounded">
                    </a>
                </div>

                <div class="col mt-3">
                    <a href="https://picsum.photos/id/248/1200/768" class="fancybox" data-fancybox="OurGallery" data-caption="Couple2">
                        <img src="https://picsum.photos/id/248/270/300" alt="Couple2" class="img-fluid w-100 rounded">
                    </a>
                </div>

                <div class="col mt-3">
                    <a href="https://picsum.photos/id/251/1200/768" class="fancybox" data-fancybox="OurGallery" data-caption="Couple3">
                        <img src="https://picsum.photos/id/251/270/300" alt="Couple3" class="img-fluid w-100 rounded">
                    </a>
                </div>

                <div class="col mt-3">
                    <a href="https://picsum.photos/id/221/1200/768" class="fancybox" data-fancybox="OurGallery" data-caption="Couple4">
                        <img src="https://picsum.photos/id/221/270/300" alt="Couple4" class="img-fluid w-100 rounded">
                    </a>
                </div>

                <div class="col mt-3">
                    <a href="https://picsum.photos/id/98/1200/768" class="fancybox" data-fancybox="OurGallery" data-caption="Nature">
                        <img src="https://picsum.photos/id/98/270/300" alt="Couple5" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/61/1200/768" class="fancybox" data-fancybox="OurGallery" data-caption="City">
                        <img src="https://picsum.photos/id/61/270/300" alt="City" class="img-fluid w-100 rounded">
                    </a>
                </div>


            </div>
        </div>



    </section>

    <!-- gallery lighbos bootstrap -->
    <!-- <section class="gallery" id="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-8 text-center">
                    <h1>Our Gallery</h1>
                </div>
            </div>
            
            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
                
                <div class="col mt-3">
                    <a href="./assets/images/gallery/couple_1.jpg" data-toggle="lightbox" data-gallery="OurGallery" data-caption="Couple1">
                        <img src="./assets/images/gallery/thumbnail/couple_1.jpg" alt="Couple1" class="img-fluid w-100 rounded">
                    </a>
                </div>
                
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/248/1200/768" data-toggle="lightbox" data-gallery="OurGallery" data-caption="Couple2">
                        <img src="https://picsum.photos/id/248/270/300" alt="Couple2" class="img-fluid w-100 rounded">
                    </a>
                </div>
                
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/251/1200/768" data-toggle="lightbox" data-gallery="OurGallery" data-caption="Couple3">
                        <img src="https://picsum.photos/id/251/270/300" alt="Couple3" class="img-fluid w-100 rounded">
                    </a>
                </div>

                <div class="col mt-3">
                    <a href="https://picsum.photos/id/221/1200/768" data-toggle="lightbox" data-gallery="OurGallery" data-caption="Couple4">
                        <img src="https://picsum.photos/id/221/270/300" alt="Couple4" class="img-fluid w-100 rounded">
                    </a>
                </div>
                
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/98/1200/768" data-toggle="lightbox" data-gallery="OurGallery" data-caption="Couple4">
                        <img src="https://picsum.photos/id/98/270/300" alt="Couple4" class="img-fluid w-100 rounded">
                    </a>
                </div>
                
                
            </div>
        </div>
    </section> -->

    <section id="gift" class="gift">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-8 text-center">
                    <h1>Gift</h1>
                    <h2>Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami, dapat melalui : </h2>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-4 col-10">
                    <div class="card text-center mb-5">
                        <div class="card-body">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png" class="img-fluid rounded" width="150" alt="BCA">
                            <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">
                                No. Rekening 4971858588
                            </p>
                            <p class="card-text" style="font-size: 0.9rem;">
                                a.n Lorem ipsum dolor
                            </p>
                            <button class="btn btn-light btn-sm rounded-4" data-nomer="4971858588" onclick="salin(this)" autofocus>Salin No. Rekening</button>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-10">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/1280px-Bank_Mandiri_logo_2016.svg.png" class="img-fluid rounded" width="150" alt="MANDIRI">
                            <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">
                                No. Rekening 1640003030287
                            </p>
                            <p class="card-text" style="font-size: 0.9rem;">
                                a.n Lorem ipsum dolor
                            </p>
                            <button class="btn btn-light btn-sm rounded-4" data-nomer="1640003030287" onclick="salin(this)" autofocus>Salin No. Rekening</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div id="rsvp" class="rsvp">
            <div class="container">
                <div class="card-body border rounded-4 shadow p-3">
                    <h1 class="font-estetik text-center mb-3" style="font-size: 3rem;">Ucapan & Doa</h1>
                    <input type="hidden" id="idbalasan">
                    <div class="mb-1" id="balasan"></div>
                    <div class="mb-3">
                        <label for="formnama" class="form-label">Nama</label>
                        <input type="text" class="form-control shadow-sm" id="formnama" placeholder="Isikan Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="hadiran" class="form-label" id="labelhadir">Kehadiran</label>
                        <select class="form-select shadow-sm" aria-label="selectkehadiran" id="hadiran">
                            <option value="0" selected>Konfirmasi Kehadiran</option>
                            <option value="1">Hadir</option>
                            <option value="2">Berhalangan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formpesan" class="form-label">Ucapan & Doa</label>
                        <textarea class="form-control shadow-sm" id="formpesan" rows="4" placeholder="Tulis Ucapan & Doa"></textarea>
                    </div>
                    <div class="d-flex">
                        <button class="flex-fill btn btn-danger btn-sm rounded-4 shadow m-1" style="display: none;" onclick="resetForm()" id="batal">
                            Batal<i class="fa-solid fa-xmark ms-1"></i>
                        </button>
                        <button class="flex-fill btn btn-primary btn-sm rounded-4 shadow m-1" style="display: none;" onclick="kirimBalasan()" id="kirimbalasan">
                            Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>
                    <div class="d-grid mb-2">
                        <button class="btn btn-primary btn-sm rounded-4 shadow" onclick="kirim()" id="kirim">
                            Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>
                </div>

                <div class="rounded-4 mt-4 mb-2">
                    <div id="daftarucapan"></div>
                </div>

                <nav class="d-flex justify-content-center">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled" id="previous">
                            <button class="page-link" onclick="pagination.previous(this)" aria-label="Previous">
                                <i class="fa-solid fa-circle-left me-1"></i>Sebelumnya
                            </button>
                        </li>
                        <li class="page-item" id="next">
                            <button class="page-link" onclick="pagination.next(this)" aria-label="Next">
                                Selanjutnya<i class="fa-solid fa-circle-right ms-1"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        </div>
    </section>

    <section id="rsvp" class="rsvp">
        <div class="container">

    </section>

    <section id="giftt" class="giftt">
        <div class="container">
            <div class="py-4">
                <div class="text-center">
                    <h1 class="font-estetik mt-0 mb-3" style="font-size: 3rem;">Love Gift</h1>
                    <p class="mb-1" style="font-size: 0.9rem;">
                        Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami,
                        dapat melalui :
                    </p>

                    <div class="overflow-x-hidden">
                        <div class="row justify-content-center">
                            <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;" data-aos="fade-down" data-aos-duration="1500">
                                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png" class="img-fluid rounded" width="150" alt="bni">
                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">
                                    No. Rekening 123456789
                                </p>
                                <p class="card-text" style="font-size: 0.9rem;">
                                    a.n Lorem ipsum dolor
                                </p>
                                <button class="btn btn-light btn-sm rounded-4" data-nomer="123456789" onclick="salin(this)" autofocus>Salin No. Rekening</button>
                            </div>

                            <div class="col-12 card-body border rounded-4 shadow p-3 m-3" style="max-width: 25rem;" data-aos="fade-down" data-aos-duration="1500">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/2560px-BANK_BRI_logo.svg.png" class="img-fluid rounded" width="150" alt="bri">
                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">
                                    No. Rekening 123456789
                                </p>
                                <p class="card-text" style="font-size: 0.9rem;">
                                    a.n Lorem ipsum dolor
                                </p>
                                <button class="btn btn-light btn-sm rounded-4" data-nomer="123456789" onclick="salin(this)" autofocus>Salin No. Rekening</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="m-0 p-0" id="ucapan">
        <div class="container">
            <div class="card-body border rounded-4 shadow p-3">
                <h1 class="font-estetik text-center mb-3" style="font-size: 3rem;">Ucapan & Doa</h1>
                <input type="hidden" id="idbalasan">
                <div class="mb-1" id="balasan"></div>
                <div class="mb-3">
                    <label for="formnama" class="form-label">Nama</label>
                    <input type="text" class="form-control shadow-sm" id="formnama" placeholder="Isikan Nama Anda">
                </div>
                <div class="mb-3">
                    <label for="hadiran" class="form-label" id="labelhadir">Kehadiran</label>
                    <select class="form-select shadow-sm" aria-label="selectkehadiran" id="hadiran">
                        <option value="0" selected>Konfirmasi Kehadiran</option>
                        <option value="1">Hadir</option>
                        <option value="2">Berhalangan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formpesan" class="form-label">Ucapan & Doa</label>
                    <textarea class="form-control shadow-sm" id="formpesan" rows="4" placeholder="Tulis Ucapan & Doa"></textarea>
                </div>
                <div class="d-flex">
                    <button class="flex-fill btn btn-danger btn-sm rounded-4 shadow m-1" style="display: none;" onclick="resetForm()" id="batal">
                        Batal<i class="fa-solid fa-xmark ms-1"></i>
                    </button>
                    <button class="flex-fill btn btn-primary btn-sm rounded-4 shadow m-1" style="display: none;" onclick="kirimBalasan()" id="kirimbalasan">
                        Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                    </button>
                </div>
                <div class="d-grid mb-2">
                    <button class="btn btn-primary btn-sm rounded-4 shadow" onclick="kirim()" id="kirim">
                        Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                    </button>
                </div>
            </div>

            <div class="rounded-4 mt-4 mb-2">
                <div id="daftarucapan"></div>
            </div>

            <nav class="d-flex justify-content-center">
                <ul class="pagination mb-0">
                    <li class="page-item disabled" id="previous">
                        <button class="page-link" onclick="pagination.previous(this)" aria-label="Previous">
                            <i class="fa-solid fa-circle-left me-1"></i>Sebelumnya
                        </button>
                    </li>
                    <li class="page-item" id="next">
                        <button class="page-link" onclick="pagination.next(this)" aria-label="Next">
                            Selanjutnya<i class="fa-solid fa-circle-right ms-1"></i>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </section>


    <!-- Ucapan start -->
    <section class="bg-wakwak">
        <div class="container py-5">
            <div class="row text-center justify-content-center">
                <div class="col-12 mb-5" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="2250">
                    <h1 class="font-dancing fs-40">Wishes</h1>
                    <p class="p-0 m-0">Doa Restu Anda merupakan karunia</p>
                    <p class="p-0 m-0">yang sangat berarti bagi kami.</p>
                </div>
                <div class="col-md-10 col-12 mx-2" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="2500">
                    <div class="card bg-fee rounded-3 p-3">
                        <form action="" method="post">
                            <div class="mb-3">
                                <input type="text" name="nama" placeholder="Nama" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <textarea name="ucapan" placeholder="Ucapan" rows="4" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3">
                                <select name="konfirmasi" class="form-select" required>
                                    <option disabled selected>Konfirmasi Kehadiran</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Tidak Hadir">Tidak Hadir</option>
                                </select>
                            </div>
                            <div class="mb-3 text-start">
                                <button type="submit" class="btn bg-berem btn-outline-secondary text-white">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ucapan end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="./assets/myJS.js"></script>
    <script src="./assets/app.js"></script>
    <script src="./assets/main.js"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" integrity="sha256-pQBbLkFHcP1cy0C8IhoSdxlm0CtcH5yJ2ki9jjgR03c=" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <!-- LightBox Bootstrap 5 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script> -->


    <script>
        simplyCountdown('.simply-countdown', {
            year: 2024, // required
            month: 4, // required
            day: 31, // required
            hours: 8, // Default is 0 [0-23] integer

            words: { //words displayed into the countdown
                days: {
                    singular: 'Hari',
                    plural: 'Hari'
                },
                hours: {
                    singular: 'Jam',
                    plural: 'Jam'
                },
                minutes: {
                    singular: 'Menit',
                    plural: 'Menit'
                },
                seconds: {
                    singular: 'Detik',
                    plural: 'Detik'
                }
            },
        });
    </script>

    <script>
        // const hamburger = document.querySelector('.navbar-toggler');
        const stickyTop = document.querySelector('.sticky-top');
        const offcanvas = document.querySelector('.offcanvas');

        offcanvas.addEventListener('show.bs.offcanvas', function() {
            stickyTop.style.overflow = 'visible';
        });

        offcanvas.addEventListener('hidden.bs.offcanvas', function() {
            stickyTop.style.overflow = 'hidden';
        });

        // hamburger.addEventListener('click', function() {
        //     stickyTop.style.overflow = 'visible';
        // });

        // const btnClose = document.querySelector('.btn-close');
        // btnClose.addEventListener('click', function() {
        //     stickyTop.style.overflow = 'hidden';
        // });
    </script>

    <script>
        const rootElement = document.querySelector(":root");

        function disableScroll() {

            scrollTop = window.pageYOffsett || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffsett || document.documentElement.scrollLeft;

            window.onscroll = function() {
                window.scrollTo(scrollTop, scrollLeft);
            }

            rootElement.style.scrollBehavior = 'auto';
        }

        function enableScroll() {
            window.onscroll = function() {}
            rootElement.style.scrollBehavior = 'smooth';
        }


        disableScroll();
    </script>

    <!-- Sekali Buka Undangan -->
    <!-- <script>
        const rootElement = document.querySelector(":root");

        function disableScroll() {

            scrollTop = window.pageYOffsett || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffsett || document.documentElement.scrollLeft;

            window.onscroll = function() {
                window.scrollTo(scrollTop, scrollLeft);
            }

            rootElement.style.scrollBehavior = 'auto';
        }

        function enableScroll() {
            window.onscroll = function() {}
            rootElement.style.scrollBehavior = 'smooth';
            localStorage.setItem('opened', 'true');
        }

        if (!localStorage.getItem('opened')) {
            disableScroll();
        }
    </script> -->
</body>

</html>