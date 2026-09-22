<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<main class="main">
    <!-- Breadcrumbs Section -->
    <?php $this->load->view('about/dynamic_breadcrumbs', [
        'bc_h1' => 'Our Blog & Moving Insights',
        'bc_desc' => 'Explore expert relocation guides, packing advice, and latest updates from our moving experts to make your shifting seamless.',
        'breadcrumbs' => [
            ['name' => 'Blog']
        ]
    ]);
    ?>

    <section class="blog-section py-5">
        <div class="container my-2">
            <!-- Section Heading -->
            <div class="blog-section-header text-center mb-5">
                <div class="blog-pill-badge mb-3">
                    <i class="bi bi-journal-text me-1 text-warning"></i> INDUSTRY INSIGHTS &amp; RELOCATION TIPS
                </div>
                <h2 class="blog-main-title mb-3">
                    Our Latest <span class="blog-title-highlight">News &amp; Blog</span>
                </h2>
                <p class="blog-subtitle mx-auto">
                    Stay informed with our expert packing techniques, relocation checklists, and commercial moving guides.
                </p>
            </div>

            <div class="row g-4">
                <?php
                $schemaData = [];
                
                if (!empty($blogs)):
                    foreach ($blogs as $b_arr):
                        $b = (object) $b_arr;
                        $custom_slug = !empty($b->slug) ? $b->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $b->title)))), "-");
                        $link = strtolower(site_url('blog/' . $custom_slug));

                        // Image resolution
                        $img = base_url('assets/images/about/packers_movers.jpg');
                        if (!empty($b->image)) {
                            if (file_exists(FCPATH . 'uploads/blogs/' . $b->image)) {
                                $img = base_url("uploads/blogs/{$b->image}");
                            } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $b->image)) {
                                $img = base_url("assets/uploads/blog/{$b->image}");
                            } elseif (filter_var($b->image, FILTER_VALIDATE_URL)) {
                                $img = $b->image;
                            }
                        }

                        // Date resolution
                        $raw_date = !empty($b->date) ? $b->date : (!empty($b->created_at) ? $b->created_at : (!empty($b->timestamp) ? $b->timestamp : 'now'));
                        $parsed_time = strtotime(str_replace('/', '-', $raw_date));
                        if (!$parsed_time) {
                            $parsed_time = time();
                        }
                        $day = date('d', $parsed_time);
                        $month = date('M', $parsed_time);
                        $full_date_str = date('M d, Y', $parsed_time);

                        $schemaData[] = [
                            "@context" => "https://schema.org",
                            "@type" => "BlogPosting",
                            "headline" => $b->title,
                            "image" => $img,
                            "datePublished" => date('Y-m-d', $parsed_time),
                            "author" => [
                                "@type" => "Person",
                                "name" => !empty($b->author) ? $b->author : "Admin"
                            ],
                            "publisher" => [
                                "@type" => "Organization",
                                "name" => isset($company3) ? $company3 : 'TCI Relocation',
                                "logo" => [
                                    "@type" => "ImageObject",
                                    "url" => base_url('assets/img/logo/logo.png')
                                ]
                            ],
                            "description" => substr(strip_tags($b->description ?? ''), 0, 160) . '...'
                        ];
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-card">
                                <div class="blog-card-img-wrap">
                                    <a href="<?= $link ?>">
                                        <img src="<?= $img ?>" class="blog-card-img" alt="<?= htmlspecialchars($b->title) ?>">
                                    </a>
                                    <span class="blog-category-chip">Relocation</span>
                                    <div class="blog-date-badge">
                                        <i class="bi bi-calendar3"></i> <?= $day ?> <?= $month ?>
                                    </div>
                                </div>
                                <div class="blog-card-body">
                                    <div class="blog-meta-row">
                                        <span class="blog-meta-item">
                                            <i class="bi bi-person-circle"></i> <?= !empty($b->author) ? htmlspecialchars($b->author) : 'Admin' ?>
                                        </span>
                                        <span class="blog-meta-item text-success">
                                            <i class="bi bi-patch-check-fill text-success"></i> Verified
                                        </span>
                                    </div>

                                    <h5 class="blog-card-title">
                                        <a href="<?= $link ?>" class="blog-title-link"><?= htmlspecialchars($b->title) ?></a>
                                    </h5>

                                    <p class="blog-excerpt">
                                        <?= substr(strip_tags($b->description ?? ''), 0, 120) ?>...
                                    </p>

                                    <div class="blog-card-footer">
                                        <a href="<?= $link ?>" class="blog-btn-read">
                                            <span>Read Article</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                        <span class="blog-read-time">
                                            <i class="bi bi-clock me-1"></i> 3 min read
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <div class="blog-empty-box">
                            <div class="blog-empty-icon">
                                <i class="bi bi-journal-x"></i>
                            </div>
                            <h4 class="fw-bold text-dark mb-2">No Articles Published Yet</h4>
                            <p class="text-muted mb-0">Our team is currently preparing helpful moving guides. Please check back soon!</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </section>
</main>


<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>