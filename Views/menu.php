<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-primary border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>Best Kitchen</h1>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>Best Kitchen</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="<?=base_url('home/dashboard')?>" class="nav-item nav-link active">Home</a>
                <a href="<?=base_url('home/form')?>" class="nav-item nav-link"> ListForm</a>
                <a href="<?=base_url('home/tambah_form')?>" class="nav-item nav-link">Form</a>
                <a href="<?=base_url('home/kue')?>" class="nav-item nav-link">Menu</a>
                <a href="<?=base_url('home/user')?>" class="nav-item nav-link">User</a>
                <a href="<?=base_url('home/logout')?>" class="nav-item nav-link">Logout</a>
                <a href="<?=base_url('home/Signup')?>" class="nav-item nav-link">Signup</a>
              
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <main id="main" class="main">


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Selamat Datang <?= session()->get('username')?></h5>
     
              
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


   <!-- Picture Modal Start -->
<div class="modal fade" id="pictureModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <!-- Image display -->
            <img src="public/about.png" class="img-fluid" id="displayImage" alt="Display Image">
        </div>
    </div>
</div>
<!-- Picture Modal End -->



    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Tentang Kita</h2>
                <h1 class="display-4 text-uppercase">Selamat Datang Best Kitchen</h1>
            </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src=<?= base_url("img/logo.jpeg") ?> >
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <p class="mb-5">Kami hadir menyediakan berbagai menu kue-kue tradisional yang dapat di order via online untuk memenuhi kemeriahan dan kemanisan acara ataupun sarapan dan cemilan teman-teman loh! 

Walaupun sekarang sudah banyak kue-kue modern yang dapat kita konsumsi, tetapi masih banyak sekali peminat dari kue-kue tradisional. Mungkin, menu-menu dari "Best Kitchen" dapat membantu mu untuk menemukan kue tradisional favorit mu. Please have your eyes here and choose yours to order! </p>
                    <div class="row g-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

 <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Menu & Pricing</h2>
                <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src=<?= base_url("img/Kukus.jpeg") ?>  alt="" style="width: 150px; height: 140px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">6.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Kue Lapis Kukus</h5>
                                        <span>salah satu makanan khas Betawi yang terbuat dari tepung beras. Kue ini memiliki ciri khas yang unik, yaitu mempunyai tekstur yang kenyal, legit dan lengket, sehingga masyakarat Betawi menyimbolkan kue lapis kukus ini sebagai hubungan persaudaraan yang erat tak terputus.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src=<?= base_url("img/Apam.jpeg") ?>  alt="" style="width: 150px; height: 140px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">6.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Kue Apam</h5>
                                        <span>Kue Apam atau Apem merupakan salah satu kue tradisional yang cukup dikenal di Indonesia yang berbahan utama tepung beras, gula, tape singkong, ragi serta santan cair. Cara pengolahannya biasanya dengan dikukus ataupun dibakar.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src=<?= base_url("img/Talam.jpeg") ?>  alt="" style="width: 150px; height: 140px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">6.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Kue Talam</h5>
                                        <span>Kue talam adalah salah satu jenis kue tradisional ciri khas Betawi. Kue talam memiliki rasa manis dan gurih. Teksturnya yang lentur dan lengket memiliki filosofi mengenai hubungan antar manusia yang penuh kekentalan dan kekerabatan.</span>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src=<?= base_url("img/Lemper.jpeg") ?>  alt="" style="width: 150px; height: 140px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">6.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Kue Lemper</h5>
                                        <span>Kue talam adalah salah satu jenis kue tradisional ciri khas Betawi. Kue talam memiliki rasa manis dan gurih. Teksturnya yang lentur dan lengket memiliki filosofi mengenai hubungan antar manusia yang penuh kekentalan dan kekerabatan.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-2.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Wedding Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-2.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Wedding Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-2.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Wedding Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-2.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Wedding Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-2.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Wedding Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-2.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Wedding Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-3.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Custom Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-3.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Custom Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-3.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Custom Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-3.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Custom Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-3.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Custom Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/cake-3.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">$99.00</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Custom Cake</h5>
                                        <span>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->