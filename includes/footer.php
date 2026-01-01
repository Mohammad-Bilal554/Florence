    <!-- footer -->
    <footer class="footer-bg footer-p pt-90"
        style="background-color: #253c80; background-image: url(img/bg/footer-bg.png);">
        <div class="footer-top pb-70">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>About Us</h2>
                            </div>
                            <div class="f-contact">
                                <p>Florence College of Nursing is dedicated to shaping compassionate and skilled nursing
                                    professionals.
                                    We blend quality education with practical training to prepare students for
                                    real-world healthcare.</p>

                            </div>
                            <div class="footer-social mt-10">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>Our Links</h2>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="<?= BASE_URL ?>index.php">Home</a></li>
                                    <li><a href="<?= BASE_URL ?>pages/about.php"> About</a></li>
                                    <li><a href="<?= BASE_URL ?>pages/courses.php">Courses</a></li>
                                    <li><a href="contact.html"> Contact Us</a></li>
                                    <li><a href="blog.html">Blog </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>Latest Post</h2>
                            </div>
                            <div class="recent-blog-footer">
                                <ul>
                                    <li>
                                        <div class="thum"> <img src="img/blog/s-blogimg-01.png" alt="img"></div>
                                        <div class="text"> <a href="blog-details.html">Nothing impossble to need hard
                                                work</a>
                                            <span>7 March, 2020</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="thum"> <img src="img/blog/s-blogimg-02.png" alt="img"></div>
                                        <div class="text"> <a href="blog-details.html">Nothing impossble to need hard
                                                work</a>
                                            <span>7 March, 2020</span>
                                        </div>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div> -->
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h2>Contact Us</h2>
                            </div>
                            <div class="f-contact">
                                <ul>
                                    <li>
                                        <i class="icon fa-solid fa-phone"></i>
                                        <span><a href="tel:+919415119317">+91 9415119317</a><br><a
                                                href="tel:+919236080095">+91 9236080095</a></span>
                                    </li>
                                    <li><i class="icon fa-solid fa-envelope"></i>
                                        <span>
                                            <a href="mailto:fnscnspn@gmail.com">fnscnspn@gmail.com</a>
                                            <br>
                                            <a href="mailto:fnscnspn@gmail.com">fnscnspn@gmail.com</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="icon fa-solid fa-map-marker-check"></i>
                                        <span>Mouzampur, N.H.-24, Bareilly Road Shahjahanpur, U.P. India
                                            Pin-242001</span>
                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copy-text">
                            <a href="index.html"><img src="<?= IMG_URL ?>/icon/main_logo.png" alt="img"
                                    style="height: 60px; width: auto;"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <p> Copyright &copy; Florence Nightingale College Of Nursing 2025 . All rights reserved.</p>
                        <p> Designed by <a href="https://digitechinnovations.com/" target="_blank">Digitech
                                Innovations</a> - A unit of <a href="https://www.tishha.com/" target="_blank">TISHHA Consultants LLP</a> </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

    <!-- jQuery FIRST -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Plugins that depend on jQuery -->
    <script src="<?= JS_URL ?>popper.min.js"></script>
    <script src="<?= JS_URL ?>bootstrap.min.js"></script>
    <script src="<?= JS_URL ?>slick.min.js"></script>
    <script src="<?= JS_URL ?>jquery.meanmenu.min.js"></script>
    <script src="<?= JS_URL ?>jquery.counterup.min.js"></script>
    <script src="<?= JS_URL ?>jquery.waypoints.min.js"></script>
    <script src="<?= JS_URL ?>jquery.magnific-popup.min.js"></script>
    <script src="<?= JS_URL ?>jquery.scrollUp.min.js"></script>

    <!-- Others -->
    <script src="<?= JS_URL ?>wow.min.js"></script>
    <script src="<?= JS_URL ?>imagesloaded.min.js"></script>
    <script src="<?= JS_URL ?>js_isotope.pkgd.min.js"></script>
    <script src="<?= JS_URL ?>parallax.min.js"></script>

    <script>
        (function ($) {
            "use strict";

            // sticky
            $(window).on('scroll', function () {
                var scroll = $(window).scrollTop();
                if (scroll < 200) {
                    $("#header-sticky").removeClass("sticky-menu");
                } else {
                    $("#header-sticky").addClass("sticky-menu");
                }
            });

            // Slider active
            function mainSlider() {
                var BasicSlider = $('.slider-active');
                BasicSlider.on('init', function (e, slick) {
                    var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
                    doAnimations($firstAnimatingElements);
                });
                BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
                    var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
                    doAnimations($animatingElements);
                });
                BasicSlider.slick({
                    autoplay: true,
                    autoplaySpeed: 7000,
                    dots: false,
                    fade: true,
                    arrows: true,
                    prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
                    nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',
                    responsive: [
                        { breakpoint: 767, settings: { dots: false, arrows: false } }
                    ]
                });

                function doAnimations(elements) {
                    var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                    elements.each(function () {
                        var $this = $(this);
                        var $animationDelay = $this.data('delay');
                        var $animationType = 'animated ' + $this.data('animation');
                        $this.css({
                            'animation-delay': $animationDelay,
                            '-webkit-animation-delay': $animationDelay
                        });
                        $this.addClass($animationType).one(animationEndEvents, function () {
                            $this.removeClass($animationType);
                        });
                    });
                }
            }
            mainSlider();

            // meanmenu
            $('#mobile-menu').meanmenu({
                meanMenuContainer: '.mobile-menu',
                meanScreenWidth: "992"
            });

            // testimonial-active
            $('.testimonial-active').slick({
                dots: true,
                infinite: true,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
                speed: 1000,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

 // brand-active
$('.brand-active').slick({
    dots: false,
    infinite: true,
    arrows: false,

    autoplay: true,
    autoplaySpeed: 0,   // time between slides (ms)
    speed: 3000,           // slide transition speed

    slidesToShow: 5,
    slidesToScroll: 1,

    pauseOnHover: false,   // keeps autoplay running on hover
    pauseOnFocus: false,   // prevents pause on click/focus
    cssEase: 'linear',

    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});


            // class-active
            $('.class-active').slick({
                dots: false,
                infinite: true,
                arrows: false,
                speed: 1000,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        })(jQuery);
    </script>


<script>
    // Simple Scroll Animation
    document.addEventListener('DOMContentLoaded', () => {
        const cards = document.querySelectorAll('.mvo-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        cards.forEach(card => {
            observer.observe(card);
        });
    });
</script>
<script>
    const itemsPerPage = 3;
    const events = document.querySelectorAll('#eventContainer > div');
    const totalPages = Math.ceil(events.length / itemsPerPage);

    let currentPage = 1;

    function showPage(page) {
        events.forEach((event, index) => {
            event.style.display =
                index >= (page - 1) * itemsPerPage && index < page * itemsPerPage
                    ? 'block'
                    : 'none';
        });

        document.getElementById('pageInfo').innerText =
            `Page ${currentPage} of ${totalPages}`;

        document.getElementById('prevBtn').disabled = currentPage === 1;
        document.getElementById('nextBtn').disabled = currentPage === totalPages;
    }

    document.getElementById('prevBtn').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
        }
    });

    // Initial load
    showPage(currentPage);
</script>
<script>
    function openLightbox(element) {
        const imgSrc = element.querySelector('img').src;
        document.getElementById('lightbox-img').src = imgSrc;
        document.getElementById('lightbox').style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Stop scrolling when gallery is open
    }

    function closeLightbox() {
        document.getElementById('lightbox').style.display = 'none';
        document.body.style.overflow = 'auto'; // Enable scrolling again
    }

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === "Escape") closeLightbox();
    });
</script>


<script>
(function () {
    const galleryItemsPerPage = 8;
    const galleryItems = document.querySelectorAll('#galleryGrid .gallery-item');
    const galleryTotalPages = Math.ceil(galleryItems.length / galleryItemsPerPage);

    let galleryCurrentPage = 1;

    function showGalleryPage(page) {
        galleryItems.forEach((item, index) => {
            item.style.display =
                index >= (page - 1) * galleryItemsPerPage &&
                index < page * galleryItemsPerPage
                    ? 'block'
                    : 'none';
        });

        document.getElementById('galleryPageInfo').innerText =
            `Page ${galleryCurrentPage} of ${galleryTotalPages}`;

        document.getElementById('galleryPrev').disabled =
            galleryCurrentPage === 1;

        document.getElementById('galleryNext').disabled =
            galleryCurrentPage === galleryTotalPages;
    }

    document.getElementById('galleryPrev').addEventListener('click', function () {
        if (galleryCurrentPage > 1) {
            galleryCurrentPage--;
            showGalleryPage(galleryCurrentPage);
        }
    });

    document.getElementById('galleryNext').addEventListener('click', function () {
        if (galleryCurrentPage < galleryTotalPages) {
            galleryCurrentPage++;
            showGalleryPage(galleryCurrentPage);
        }
    });

    // Initial load
    showGalleryPage(galleryCurrentPage);
})();
</script>

<script>
(function () {
    const cardsPerPage = 6;
    const blogCards = document.querySelectorAll('#blogGrid .blog-card');
    const pageButtons = document.querySelectorAll('.page-btn');
    const totalPages = Math.ceil(blogCards.length / cardsPerPage);

    let currentPage = 1;

    function showPage(page) {
        blogCards.forEach((card, index) => {
            card.style.display =
                index >= (page - 1) * cardsPerPage &&
                index < page * cardsPerPage
                    ? 'block'
                    : 'none';
        });

        // Update active button
        pageButtons.forEach(btn => btn.classList.remove('active'));
        pageButtons.forEach(btn => {
            if (btn.innerText == page) {
                btn.classList.add('active');
            }
        });

        // Handle arrow disable
        pageButtons[0].classList.toggle('disabled', page === 1);
        pageButtons[pageButtons.length - 1].classList.toggle('disabled', page === totalPages);
    }

    pageButtons.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            if (this.classList.contains('disabled')) return;

            if (this.innerText === '‹' || this.innerHTML.includes('chevron-left')) {
                if (currentPage > 1) currentPage--;
            } 
            else if (this.innerText === '›' || this.innerHTML.includes('chevron-right')) {
                if (currentPage < totalPages) currentPage++;
            } 
            else {
                currentPage = parseInt(this.innerText);
            }

            showPage(currentPage);
        });
    });

    // Initial load
    showPage(currentPage);
})();
</script>

<script>
window.onscroll = function() {
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrolled = (winScroll / height) * 100;
    let bar = document.getElementById("blogProgress");
    if (bar) bar.style.width = scrolled + "%";
};
</script>
</body>

</html>