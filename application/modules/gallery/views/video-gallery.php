<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Video Gallery',
    'bc_title_white' => 'Video',
    'bc_title_orange' => 'Gallery',
    'bc_desc' => 'Watch our step-by-step cargo handling processes, transport safety standards, and global freight forwarding in action.'
]); 
?>

<!-- Main Page Content Section (Full-Width Video Gallery) -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <!-- Centered Header -->
        <div class="text-center mb-5 max-w-800 mx-auto">
            <h2 class="fw-bold text-dark mb-3">Logistics Process Videos</h2>
            <p class="text-muted small mb-0">
                At <strong><?= $company3 ?></strong>, we maintain complete transparency in our logistics operations. Watch our field videos to see how our trained professionals handle heavy-duty cargo loading, customs clearance, and safe global transportation to ensure a worry-free shipping experience.
            </p>
        </div>

        <!-- Videos Grid (Full-Width Responsive 3-Columns) -->
        <div class="row g-4 mb-5">
            <?php if(!empty($videos)): ?>
                <?php foreach($videos as $video): 
                    $v_url = $video->video_url;
                    if (preg_match('/youtube\.com\/watch\?.*v=([^&]+)/', $v_url, $m)) {
                        $v_url = 'https://www.youtube.com/embed/' . $m[1];
                    } elseif (preg_match('/youtu\.be\/([^?]+)/', $v_url, $m)) {
                        $v_url = 'https://www.youtube.com/embed/' . $m[1];
                    } elseif (preg_match('/youtube\.com\/shorts\/([^?\/]+)/', $v_url, $m)) {
                        $v_url = 'https://www.youtube.com/embed/' . $m[1];
                    }
                ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border rounded-4 shadow-sm overflow-hidden gallery-video-card bg-white">
                        <div class="ratio ratio-16x9">
                            <iframe src="<?= $v_url ?>" title="<?= $video->title ?>" allowfullscreen class="border-0"></iframe>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="fw-bold text-dark mb-0"><?= $video->title ?></h6>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center text-muted py-5">
                    <i class="bi bi-play-circle fs-1 text-secondary mb-3 d-block"></i>
                    <p class="mb-0">No videos available in the gallery at this moment.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Quality commitment banner -->
        <div class="p-4 bg-light border-start border-4 border-warning rounded-4">
            <h5 class="fw-bold text-dark mb-2">
                <i class="bi bi-camera-video-fill text-warning me-2"></i>Our Video Guidelines
            </h5>
            <p class="mb-0 text-muted small">
                All video clips shown are recorded on-site during actual shifting operations. We do not use simulated or stock footage, ensuring that what you see represents the true quality of service you will receive.
            </p>
        </div>

    </div>
</section>
