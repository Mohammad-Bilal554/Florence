<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center"
        style="background-image: linear-gradient(rgba(95,157,161,0.55), rgba(37,60,128,0.55)), url(<?= IMG_URL ?>bg/bg_first.png);">


        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Courses</h2>

                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->


    <!-- courses-area -->
    <section class="courses pt-120 pb-120">
        <div class="container">
            <!-- <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-50">
                    <h5><i class="fa-solid fa-graduation-cap"></i> Our Courses</h5>
                    <h2>Programs Offered</h2>
                </div>
            </div>
        </div> -->

            <div class="row courses-row">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="courses-item">
                        <div class="thumb">
                            <img src="<?= IMG_URL ?>courses/bsc.png" alt="B.Sc Nursing">
                        </div>

                        <div class="courses-content">
                            <span class="cat">
                                <i class="fal fa-graduation-cap"></i> Nursing
                            </span>

                            <h3>B.Sc Nursing</h3>

                            <p>
                                A comprehensive undergraduate program focused on professional nursing skills and
                                clinical excellence.
                            </p>

                            <a href="<?= BASE_URL ?>pages/bsc-nursing" class="readmore">
                                Read More <i class="fa-solid fa-long-arrow-right"></i>
                            </a>
                        </div>

                        <div class="icon">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="courses-item">
                        <div class="thumb">
                            <img src="<?= IMG_URL ?>courses/diploma.png" alt="Diploma Nursing">
                        </div>

                        <div class="courses-content">
                            <span class="cat">
                                <i class="fal fa-graduation-cap"></i> Nursing
                            </span>

                            <h3>Diploma in General Nursing</h3>

                            <p>
                                A practice-oriented program preparing students for essential patient care and
                                healthcare services.
                            </p>

                            <a href="<?= BASE_URL ?>pages/diploma" class="readmore">
                                Read More <i class="fa-solid fa-long-arrow-right"></i>
                            </a>
                        </div>

                        <div class="icon">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="courses-item">
                        <div class="thumb">
                            <img src="<?= IMG_URL ?>courses/post.png" alt="Post Basic Nursing">
                        </div>

                        <div class="courses-content">
                            <span class="cat">
                                <i class="fal fa-graduation-cap"></i> Nursing
                            </span>

                            <h3>Post Basic B.Sc. Nursing</h3>

                            <p>
                                An advanced program designed to enhance clinical knowledge and career growth for
                                nursing professionals.
                            </p>

                            <a href="<?= BASE_URL ?>pages/basic-bsc" class="readmore">
                                Read More <i class="fa-solid fa-long-arrow-right"></i>
                            </a>
                        </div>

                        <div class="icon">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- courses-area -->
    <!-- brand-area -->
    <div class="brand-area pt-60 pb-60" style="background-color:#5f9ea1">
        <div class="container">
            <div class="brand-active">
                <div class="single-brand">
                    <img src="<?= IMG_URL ?>/testimonials/male.png" alt="img">
                </div>
                <div class="single-brand">
                    <img src="<?= IMG_URL ?>/testimonials/female.png" alt="img">
                </div>
                <div class="single-brand">
                    <img src="<?= IMG_URL ?>/testimonials/male.png" alt="img">
                </div>
                <div class="single-brand">
                    <img src="<?= IMG_URL ?>/testimonials/female.png" alt="img">
                </div>
                <div class="single-brand">
                    <img src="<?= IMG_URL ?>/testimonials/male.png" alt="img">
                </div>
                <div class="single-brand">
                    <img src="<?= IMG_URL ?>/testimonials/female.png" alt="img">
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
</main>
<!-- main-area-end -->



<?php include __DIR__ . '/../includes/footer.php'; ?>