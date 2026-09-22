<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$post_title = !empty($query[0]->title) ? $query[0]->title : 'Blog Details';
$curr_url = current_url();

// Image resolution
$img = base_url('assets/images/about/packers_movers.jpg');
if (!empty($query[0]->image)) {
    if (file_exists(FCPATH . 'uploads/blogs/' . $query[0]->image)) {
        $img = base_url("uploads/blogs/{$query[0]->image}");
    } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $query[0]->image)) {
        $img = base_url("assets/uploads/blog/{$query[0]->image}");
    } elseif (filter_var($query[0]->image, FILTER_VALIDATE_URL)) {
        $img = $query[0]->image;
    }
}

// Date resolution
$raw_date = !empty($query[0]->date) ? $query[0]->date : (!empty($query[0]->created_at) ? $query[0]->created_at : (!empty($query[0]->timestamp) ? $query[0]->timestamp : 'now'));
$parsed_date = strtotime(str_replace('/', '-', $raw_date)) ?: time();
$formatted_date = date('M d, Y', $parsed_date);

// Content
$post_content = !empty($query[0]->description) ? $query[0]->description : (!empty($query[0]->content) ? nl2br($query[0]->content) : '');
?>

<main class="main">
    <!-- Breadcrumbs Section -->
    <?php 
    $this->load->view('about/dynamic_breadcrumbs', [
        'bc_h1' => $post_title,
        'bc_desc' => 'Read our latest packing, moving, and professional relocation insights.',
        'breadcrumbs' => [
            ['name' => 'Blog', 'url' => site_url('blog')],
            ['name' => $post_title]
        ]
    ]); 
    ?>

    <!-- Blog Single Post -->
    <section class="blog-details-section py-5">
        <div class="container my-2">
            <div class="row g-4">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <article class="blog-details-card">
                        <!-- Featured Image -->
                        <div class="blog-details-img-wrap">
                            <img src="<?= $img ?>" alt="<?= htmlspecialchars($post_title) ?>" class="blog-details-img">
                        </div>
                        
                        <!-- Meta Info Bar -->
                        <div class="blog-details-meta">
                            <div class="blog-details-meta-left">
                                <span><i class="bi bi-calendar-event me-1.5 text-warning"></i> <?= $formatted_date ?></span>
                                <span><i class="bi bi-person-circle me-1.5 text-primary"></i> By <?= !empty($query[0]->author) ? htmlspecialchars($query[0]->author) : 'Admin' ?></span>
                                <span class="text-success"><i class="bi bi-patch-check-fill me-1.5"></i> Verified Guide</span>
                            </div>
                            <div>
                                <button type="button" class="blog-btn-share" data-bs-toggle="modal" data-bs-target="#shareModal">
                                    <i class="bi bi-share"></i> Share Post
                                </button>
                            </div>
                        </div>

                        <!-- Blog Title & Body -->
                        <h1 class="blog-details-title"><?= htmlspecialchars($post_title) ?></h1>
                        
                        <div class="blog-content-wrapper">
                            <?= $post_content ?>
                        </div>

                        <!-- Share Strip -->
                        <div class="blog-share-strip">
                            <div class="d-flex align-items-center gap-2">
                                <span class="fw-bold text-dark small"><i class="bi bi-share-fill me-1"></i> Share with friends:</span>
                            </div>
                            <div class="blog-share-btn-group">
                                <a href="https://api.whatsapp.com/send?text=<?= urlencode($post_title . ' - ' . $curr_url) ?>" target="_blank" class="blog-social-icon-btn btn-social-wa" title="Share on WhatsApp">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($curr_url) ?>" target="_blank" class="blog-social-icon-btn btn-social-fb" title="Share on Facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?text=<?= urlencode($post_title) ?>&url=<?= urlencode($curr_url) ?>" target="_blank" class="blog-social-icon-btn btn-social-tw" title="Share on X (Twitter)">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="sticky-top" style="top: 90px;">
                        <!-- Recent Posts Widget -->
                        <div class="blog-sidebar-widget">
                            <h5 class="blog-widget-title">
                                <i class="bi bi-clock-history text-warning"></i> Recent Articles
                            </h5>
                            <div class="recent-posts-list">
                                <?php if (!empty($recent_posts)): ?>
                                    <?php foreach ($recent_posts as $post_arr): $post = (object)$post_arr; ?>
                                        <?php
                                        $image_file = $post->image ?? '';
                                        $full_path = FCPATH . 'uploads/blogs/' . $image_file;
                                        $imagePath = ($image_file && file_exists($full_path)) ? base_url('uploads/blogs/' . $image_file) : base_url('assets/images/about/packers_movers.jpg');
                                        $custom_slug = !empty($post->slug) ? $post->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $post->title)))), "-");
                                        $p_date = !empty($post->date) ? $post->date : (!empty($post->created_at) ? date('M d, Y', strtotime($post->created_at)) : date('M d, Y'));
                                        ?>
                                        <a href="<?= site_url('blog/'.$custom_slug) ?>" class="blog-recent-item">
                                            <img src="<?= $imagePath ?>" alt="thumb" class="blog-recent-thumb shadow-sm">
                                            <div>
                                                <div class="blog-recent-title"><?= htmlspecialchars($post->title) ?></div>
                                                <small class="blog-recent-date"><i class="bi bi-calendar3 me-1"></i> <?= $p_date ?></small>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-muted small mb-0">No other posts available.</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Sticky Moving Help CTA Widget -->
                        <div class="blog-sidebar-cta">
                            <div class="blog-sidebar-cta-icon">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h5 class="blog-sidebar-cta-title">Need Moving Help?</h5>
                            <p class="blog-sidebar-cta-desc">Get a quick, customized quotation for your household or commercial shifting.</p>
                            <button type="button" class="btn blog-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-calculator me-1.5"></i> Get a Free Quote
                            </button>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg p-3">
            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title fw-bold" id="shareModalLabel">Share This Article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3">
                <div class="d-grid gap-2">
                    <a href="https://api.whatsapp.com/send?text=<?= urlencode($post_title . ' - ' . $curr_url) ?>" target="_blank" class="btn text-white py-2.5 rounded-3 fw-bold btn-social-wa">
                        <i class="bi bi-whatsapp me-2"></i> Share on WhatsApp
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($curr_url) ?>" target="_blank" class="btn text-white py-2.5 rounded-3 fw-bold btn-social-fb">
                        <i class="bi bi-facebook me-2"></i> Share on Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?text=<?= urlencode($post_title) ?>&url=<?= urlencode($curr_url) ?>" target="_blank" class="btn text-white py-2.5 rounded-3 fw-bold btn-social-tw">
                        <i class="bi bi-twitter-x me-2"></i> Share on X (Twitter)
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentUrl = window.location.href;
    document.querySelectorAll('.social-buttons a').forEach(function(btn) {
        var shareUrl = btn.getAttribute('href');
        btn.setAttribute('href', shareUrl.replace('YOUR_URL', encodeURIComponent(currentUrl)));
    });
</script>



<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes(@$query[0]->title) ?>",
    "image": [
        "<?= @$query[0]->image ? base_url('uploads/blogs/' . @$query[0]->image) : base_url('assets/images/about/packers_movers.jpg') ?>"
    ],
    "datePublished": "<?= date('c', strtotime(@$query[0]->created_at)) ?>",
    "author": {
        "@type": "Person",
        "name": "Admin"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= isset($company3) ? $company3 : 'MyCompany' ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url('assets/img/logo/logo.png') ?>"
        }
    },
    "description": "<?= addslashes(substr(strip_tags(@$query[0]->description), 0, 160)) ?>",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= current_url() ?>"
    }
}
</script>