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
                            <h2>Blog Details</h2>

                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
<section class="blog-detail-simple">
    <!-- Reading Progress Bar -->
    <div class="reading-progress-container">
        <div class="reading-progress-bar" id="blogProgress"></div>
    </div>

    <div class="content-wrap">

        <!-- Header -->
        <header class="detail-header">
            <h1>The Impact of Modern Technology on Patient Care</h1>
            <div class="author-meta">
                <!-- <img src="https://ui-avatars.com/api/?name=Florence+College&background=5ba4a4&color=fff"
                     alt="College Logo"> -->
                <span>
                    <!-- Posted by <strong>Academic Dept</strong> • -->
                     Oct 25, 2025</span>
            </div>
        </header>

        <!-- Featured Image -->
        <div class="feature-img-wrapper">
            <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=1200&q=80"
                 alt="Technology in Nursing">
        </div>

        <!-- Blog Content -->
        <article class="detail-body">
            <p class="lead-text">
                At Florence College of Nursing, we believe that staying updated with medical technology
                is not just an advantage—it is a necessity for the modern healthcare professional.
            </p>

            <p>
                In the last decade, we have seen a massive shift toward digital health records and automated
                patient monitoring. These tools allow nurses to spend less time on paperwork and more time
                on direct patient interaction.
            </p>

            <h2>Simulated Learning Environments</h2>

            <p>
                Our students spend significant time in our high-tech simulation labs. These labs use advanced
                manikins that can mimic human reactions to various treatments, allowing students to practice
                high-stakes procedures in a safe, controlled environment.
            </p>

            <p>
                By the time our graduates enter the workforce, they are already familiar with the sophisticated
                equipment used in top-tier hospitals across India.
            </p>

            <div class="post-tags">
                <a href="#">#NursingTech</a>
                <a href="#">#HealthcareInnovation</a>
                <a href="#">#StudentLife</a>
            </div>
        </article>

    </div>
</section>

</main>




<?php include __DIR__ . '/../includes/footer.php'; ?>