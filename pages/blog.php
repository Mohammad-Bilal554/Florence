<?php include __DIR__ . '/../includes/header.php'; ?>


<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center"
        style="background-image: linear-gradient(rgba(95,157,161,0.55), rgba(37,60,128,0.55)), url(<?= IMG_URL ?>/bg/bg_first.png);">


        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Blogs</h2>

                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->





<section class="blog-section">
    <div class="blog-header">
        <h2>Latest News & Articles</h2>
        <p>Stay updated with the latest trends in nursing and healthcare education.</p>
    </div>

    <div class="blog-grid" id="blogGrid">
        <article class="blog-card">
            <div class="blog-img">
                <span class="category-badge">Education</span>
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80" alt="Nursing Blog">
            </div>
            <div class="blog-content">
                <span class="blog-date">October 12, 2025</span>
                <h3>The Future of Nursing: Technology in Healthcare</h3>
                <p>Explore how AI and robotics are reshaping the way nurses provide patient care in modern hospitals.</p>
                <a href="<?= BASE_URL ?>pages/blog-detail.php" class="read-more">Read Full Article <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </article>

        <article class="blog-card">
            <div class="blog-img">
                <span class="category-badge">Career</span>
                <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?auto=format&fit=crop&w=600&q=80" alt="Career Tips">
            </div>
            <div class="blog-content">
                <span class="blog-date">October 05, 2025</span>
                <h3>Top 5 Skills Every Nursing Graduate Needs</h3>
                <p>Beyond medical knowledge, soft skills like communication and empathy are vital for a successful career.</p>
                <a href="<?= BASE_URL ?>pages/blog-detail.php" class="read-more">Read Full Article <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </article>

        <article class="blog-card">
            <div class="blog-img">
                <span class="category-badge">Health Tips</span>
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80" alt="Health Tips">
            </div>
            <div class="blog-content">
                <span class="blog-date">September 28, 2025</span>
                <h3>Community Health: A Nurse’s Perspective</h3>
                <p>A look into how Florence College students are making a difference in rural healthcare programs.</p>
                <a href="<?= BASE_URL ?>pages/blog-detail.php" class="read-more">Read Full Article <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </article>

           <article class="blog-card">
            <div class="blog-img">
                <span class="category-badge">Health Tips</span>
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80" alt="Health Tips">
            </div>
            <div class="blog-content">
                <span class="blog-date">September 28, 2025</span>
                <h3>Community Health: A Nurse’s Perspective</h3>
                <p>A look into how Florence College students are making a difference in rural healthcare programs.</p>
                <a href="<?= BASE_URL ?>pages/blog-detail.php" class="read-more">Read Full Article <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </article>

           <article class="blog-card">
            <div class="blog-img">
                <span class="category-badge">Health Tips</span>
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80" alt="Health Tips">
            </div>
            <div class="blog-content">
                <span class="blog-date">September 28, 2025</span>
                <h3>Community Health: A Nurse’s Perspective</h3>
                <p>A look into how Florence College students are making a difference in rural healthcare programs.</p>
                <a href="<?= BASE_URL ?>pages/blog-detail.php" class="read-more">Read Full Article <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </article>
        <article class="blog-card">
            <div class="blog-img">
                <span class="category-badge">Health Tips</span>
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80" alt="Health Tips">
            </div>
            <div class="blog-content">
                <span class="blog-date">September 28, 2025</span>
                <h3>Community Health: A Nurse’s Perspective</h3>
                <p>A look into how Florence College students are making a difference in rural healthcare programs.</p>
                <a href="<?= BASE_URL ?>pages/blog-detail.php" class="read-more">Read Full Article <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </article>

           <article class="blog-card">
            <div class="blog-img">
                <span class="category-badge">Health Tips</span>
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80" alt="Health Tips">
            </div>
            <div class="blog-content">
                <span class="blog-date">September 28, 2025</span>
                <h3>Community Health: A Nurse’s Perspective</h3>
                <p>A look into how Florence College students are making a difference in rural healthcare programs.</p>
                <a href="<?= BASE_URL ?>pages/blog-detail.php" class="read-more">Read Full Article <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </article>
        
    </div>

    <div class="pagination">
        <a href="#" class="page-btn disabled"><i class="fa-solid fa-chevron-left"></i></a>
        <a href="#" class="page-btn active">1</a>
        <a href="#" class="page-btn">2</a>
        <a href="#" class="page-btn">3</a>
        <a href="#" class="page-btn"><i class="fa-solid fa-chevron-right"></i></a>
    </div>
</section>

</main>








<?php include __DIR__ . '/../includes/footer.php'; ?>