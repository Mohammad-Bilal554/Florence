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
                            <h2>Events</h2>

                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- event-area -->
    <section class="event pt-120 pb-90 p-relative fix">
        <div class="animations-06"><img src="<?= IMG_URL ?>bg/an-img-sixth.png" alt="an-img-01">
        </div>
        <div class="animations-07"><img src="<?= IMG_URL ?>bg/an-img-seventh.png"
                alt="contact-bg-an-01"></div>
        <div class="animations-08"><img src="<?= IMG_URL ?>bg/an-img-eighth.png"
                alt="contact-bg-an-01"></div>
        <div class="animations-09"><img src="<?= IMG_URL ?>bg/an-img-ninth.png"
                alt="contact-bg-an-01"></div>
        <div class="container">
            <!-- <div class="row">
                    <div class="col-lg-12 p-relative">
                        <div class="section-title center-align mb-50 text-center wow fadeInDown animated"
                            data-animation="fadeInDown" data-delay=".4s">
                            <h5><i class="fa-solid fa-graduation-cap"></i> Our Events</h5>
                            <h2>
                                Upcoming Events
                            </h2>

                        </div>
                    </div>

                </div> -->
            <div class="row" id="eventContainer">

                <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="<?= BASE_URL ?>pages/event-detail.php"><img
                                    src="<?= IMG_URL ?>main_page/event_one.png"
                                    alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">
                            <div class="date"><strong>28</strong> Dec, 2025</div>
                            <h3><a href="<?= BASE_URL ?>pages/event-detail.php"> World Health Day Awareness
                                    Program</a></h3>
                            <p>An awareness event promoting healthy living, preventive care, and public health
                                education.</p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fa-solid fa-long-arrow-right"></i>
                                <strong>Bentley Campus, Perth, WA</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="<?= BASE_URL ?>pages/event-detail.php"><img
                                    src="<?= IMG_URL ?>main_page/event_two.png"
                                    alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">
                            <div class="date"><strong>2</strong> Jan, 2026</div>
                            <h3><a href="<?= BASE_URL ?>pages/event-detail.php">Clinical Skills & Simulation
                                    Workshop</a>
                            </h3>
                            <p>A practical training session to strengthen essential nursing and patient-care skills.
                            </p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fa-solid fa-long-arrow-right"></i>
                                <strong>Bentley Campus, Perth, WA</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="<?= BASE_URL ?>pages/event-detail.php"><img
                                    src="<?= IMG_URL ?>main_page/event_three.png"
                                    alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">
                            <div class="date"><strong>15</strong> Jan, 2026</div>
                            <h3><a href="<?= BASE_URL ?>pages/event-detail.php"> Community Health Outreach Camp</a>
                            </h3>
                            <p>A health outreach program providing basic check-ups and health guidance to the
                                community.</p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fa-solid fa-long-arrow-right"></i>
                                <strong>Bentley Campus, Perth, WA</strong>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="<?= BASE_URL ?>pages/event-detail.php"><img
                                    src="<?= IMG_URL ?>main_page/event_three.png"
                                    alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">
                            <div class="date"><strong>15</strong> Jan, 2026</div>
                            <h3><a href="<?= BASE_URL ?>pages/event-detail.php"> Community Health Outreach Camp</a>
                            </h3>
                            <p>A health outreach program providing basic check-ups and health guidance to the
                                community.</p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fa-solid fa-long-arrow-right"></i>
                                <strong>Bentley Campus, Perth, WA</strong>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="<?= BASE_URL ?>pages/event-detail.php"><img
                                    src="<?= IMG_URL ?>main_page/event_three.png"
                                    alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">
                            <div class="date"><strong>15</strong> Jan, 2026</div>
                            <h3><a href="<?= BASE_URL ?>pages/event-detail.php"> Community Health Outreach Camp</a>
                            </h3>
                            <p>A health outreach program providing basic check-ups and health guidance to the
                                community.</p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fa-solid fa-long-arrow-right"></i>
                                <strong>Bentley Campus, Perth, WA</strong>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="pagination-wrapper text-center mt-4">
                <button id="prevBtn" class="btn btn-outline-teal me-2">Prev</button>
                <span id="pageInfo"></span>
                <button id="nextBtn" class="btn btn-outline-teal ms-2">Next</button>
            </div>



        </div>
    </section>
    <!-- courses-area -->
    <!-- brand-area -->
    <div class="brand-area pt-60 pb-60" style="background-color:#125875">
        <div class="container">
            <div class="row brand-active slick-initialized slick-slider">
                <div class="slick-list draggable">
                    <div class="slick-track"
                        style="opacity: 1; width: 4620px; transform: translate3d(-1650px, 0px, 0px); transition: transform 1000ms;">
                        <div class="col-xl-2 slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true"
                            tabindex="-1" style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo2.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                            tabindex="-1" style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo3.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                            tabindex="-1" style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo4.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                            tabindex="-1" style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo5.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1"
                            style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo1.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1"
                            style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo2.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide" data-slick-index="2" aria-hidden="true" tabindex="0"
                            style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo3.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide" data-slick-index="3" aria-hidden="true" tabindex="0"
                            style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo4.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide slick-current slick-active" data-slick-index="4"
                            aria-hidden="false" tabindex="0" style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo5.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide slick-cloned slick-active" data-slick-index="5" id=""
                            aria-hidden="false" tabindex="-1" style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo1.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide slick-cloned slick-active" data-slick-index="6" id=""
                            aria-hidden="false" tabindex="-1" style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo2.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide slick-cloned slick-active" data-slick-index="7" id=""
                            aria-hidden="false" tabindex="-1" style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo3.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true"
                            tabindex="-1" style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo4.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2 slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true"
                            tabindex="-1" style="width: 330px;">
                            <div class="single-brand">
                                <img src="./events_files/b-logo5.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- brand-area-end -->
</main>
<!-- main-area-end -->


<?php include __DIR__ . '/../includes/footer.php'; ?>