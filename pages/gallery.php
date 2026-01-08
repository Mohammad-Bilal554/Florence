<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- main-area -->
<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center"
        style="background-image: linear-gradient(rgba(95,157,161,0.55), rgba(37,60,128,0.55)), url(<?= IMG_URL ?>/bg/bg_first.png);">


        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Gallery</h2>

                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->




<section class="gallery-container">
    <div class="gallery-header">
        <h2>Our Campus Life</h2>
        <p>A glimpse into the world-class facilities at Florence College of Nursing</p>
    </div>

    <div class="gallery-grid" id="galleryGrid">
        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?auto=format&fit=crop&w=600&q=80" alt="Simulation Lab">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Modern Simulation Lab</span>
            </div>
        </div>

        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&w=600&q=80" alt="Anatomy Class">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Anatomy Practice</span>
            </div>
        </div>

        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80" alt="Hospital Visit">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Clinical Training</span>
            </div>
        </div>
         <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?auto=format&fit=crop&w=600&q=80" alt="Simulation Lab">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Modern Simulation Lab</span>
            </div>
        </div>

        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&w=600&q=80" alt="Anatomy Class">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Anatomy Practice</span>
            </div>
        </div>

        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80" alt="Hospital Visit">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Clinical Training</span>
            </div>
        </div>
         <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?auto=format&fit=crop&w=600&q=80" alt="Simulation Lab">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Modern Simulation Lab</span>
            </div>
        </div>

        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&w=600&q=80" alt="Anatomy Class">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Anatomy Practice</span>
            </div>
        </div>

        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80" alt="Hospital Visit">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Clinical Training</span>
            </div>
        </div>
         <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?auto=format&fit=crop&w=600&q=80" alt="Simulation Lab">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Modern Simulation Lab</span>
            </div>
        </div>

        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&w=600&q=80" alt="Anatomy Class">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Anatomy Practice</span>
            </div>
        </div>

        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80" alt="Hospital Visit">
            <div class="gallery-overlay">
                <i class="fa-solid fa-search-plus"></i>
                <span>Clinical Training</span>
            </div>
        </div>


       
        
    </div>
</section>

<div class="gallery-pagination text-center mt-2 mb-4">
    <button id="galleryPrev" class="btn btn-outline-teal me-2">Prev</button>
    <span id="galleryPageInfo"></span>
    <button id="galleryNext" class="btn btn-outline-teal ms-2">Next</button>
</div>


<div id="lightbox" class="lightbox" onclick="closeLightbox()">
    <span class="close-lightbox">&times;</span>
    <img id="lightbox-img" src="" alt="Zoomed Image">
</div>





<?php include __DIR__ . '/../includes/footer.php'; ?>