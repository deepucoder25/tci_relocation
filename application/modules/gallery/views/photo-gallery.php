<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Photo Gallery',
    'bc_title_white' => 'Photo',
    'bc_title_orange' => 'Gallery',
    'bc_desc' => 'Explore visual highlights of our cargo handling, warehouse storage, specialized container fleets, and global logistics operations.'
]); 
?>

<!-- Main Page Content Section (Full-Width Gallery) -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <!-- Centered Header -->
        <div class="text-center mb-5 max-w-800 mx-auto">
            <h2 class="fw-bold text-dark mb-3">Our Logistics Operations in Action</h2>
            <p class="text-muted small mb-0">
                Take a look at our on-field photos demonstrating our dedication to safety, careful cargo handling, and organized supply chain management. Our photo gallery highlights our freight standards, secure warehouse storage, and specialized fleets.
            </p>
        </div>

        <!-- Photo Gallery Grid (Full-Width Responsive 3-Columns) -->
        <div class="row g-4">
            <?php if(!empty($photos)): ?>
                <?php foreach($photos as $index => $photo): ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card border rounded-4 shadow-sm overflow-hidden gallery-photo-card h-100 bg-white">
                        <div class="gallery-img-wrapper position-relative overflow-hidden" 
                             data-img-src="<?= base_url('assets/uploads/gallery/' . $photo->image) ?>"
                             data-title="<?= htmlspecialchars($photo->title) ?>"
                             data-album="<?= htmlspecialchars($photo->album_name ?? '') ?>"
                             data-index="<?= $index ?>"
                             title="Click to view full image">
                            <img loading="lazy" src="<?= base_url('assets/uploads/gallery/' . $photo->image) ?>" class="w-100 img-fluid gallery-img" alt="<?= htmlspecialchars($photo->title) ?>">
                            <div class="gallery-zoom-overlay">
                                <span class="gallery-zoom-btn">
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <?php if(!empty($photo->album_name)): ?>
                            <span class="badge bg-success-subtle text-success border border-success-subtle mb-2 small"><?= $photo->album_name ?></span>
                            <?php endif; ?>
                            <h6 class="fw-bold text-dark mb-0"><?= $photo->title ?></h6>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center text-muted py-5">
                    <i class="bi bi-images fs-1 text-secondary mb-3 d-block"></i>
                    <p class="mb-0">No photos available in the gallery at this moment.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- Full-Page Image Lightbox Modal -->
<div class="modal fade" id="galleryLightboxModal" tabindex="-1" aria-labelledby="lightboxTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0 shadow-none">
            <!-- Header Bar -->
            <div class="d-flex justify-content-end align-items-center gap-2 mb-2 px-2">
                <a id="lightboxOpenFull" href="#" target="_blank" class="btn btn-dark btn-sm rounded-pill px-3 py-1 text-white border border-secondary" style="background: rgba(0,0,0,0.7);" title="Open raw image in new tab">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Real Size
                </a>
                <button type="button" class="btn btn-dark btn-sm rounded-circle p-2 px-3 text-white border border-secondary" data-bs-dismiss="modal" aria-label="Close" style="background: rgba(0,0,0,0.7);">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <!-- Body: Image & Controls -->
            <div class="modal-body p-0 text-center position-relative d-flex justify-content-center align-items-center">
                <button type="button" class="lightbox-nav-btn lightbox-prev-btn" id="lightboxPrev" aria-label="Previous image">
                    <i class="bi bi-chevron-left"></i>
                </button>
                
                <img id="lightboxImg" src="" alt="Full preview" class="img-fluid rounded-3">
                
                <button type="button" class="lightbox-nav-btn lightbox-next-btn" id="lightboxNext" aria-label="Next image">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
            <!-- Caption -->
            <div class="text-center mt-3">
                <span id="lightboxBadge" class="badge bg-warning text-dark me-2 small d-none"></span>
                <h5 id="lightboxTitle" class="text-white fw-bold d-inline mb-0"></h5>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const wrappers = document.querySelectorAll('.gallery-img-wrapper');
    const modalEl = document.getElementById('galleryLightboxModal');
    if (!modalEl || wrappers.length === 0) return;

    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxBadge = document.getElementById('lightboxBadge');
    const lightboxOpenFull = document.getElementById('lightboxOpenFull');
    const prevBtn = document.getElementById('lightboxPrev');
    const nextBtn = document.getElementById('lightboxNext');

    const items = [];
    wrappers.forEach((w, idx) => {
        items.push({
            src: w.getAttribute('data-img-src'),
            title: w.getAttribute('data-title'),
            album: w.getAttribute('data-album')
        });

        w.addEventListener('click', function(e) {
            e.preventDefault();
            currentIndex = idx;
            updateLightbox(currentIndex);
            const modalInstance = bootstrap.Modal.getOrCreateInstance(modalEl);
            modalInstance.show();
        });
    });

    let currentIndex = 0;
    function updateLightbox(idx) {
        if (!items[idx]) return;
        lightboxImg.src = items[idx].src;
        lightboxTitle.textContent = items[idx].title || '';
        lightboxOpenFull.href = items[idx].src;

        if (items[idx].album) {
            lightboxBadge.textContent = items[idx].album;
            lightboxBadge.classList.remove('d-none');
        } else {
            lightboxBadge.classList.add('d-none');
        }

        if (items.length <= 1) {
            if (prevBtn) prevBtn.style.display = 'none';
            if (nextBtn) nextBtn.style.display = 'none';
        } else {
            if (prevBtn) prevBtn.style.display = 'inline-flex';
            if (nextBtn) nextBtn.style.display = 'inline-flex';
        }
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateLightbox(currentIndex);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            currentIndex = (currentIndex + 1) % items.length;
            updateLightbox(currentIndex);
        });
    }

    document.addEventListener('keydown', function(e) {
        if (!modalEl.classList.contains('show')) return;
        if (e.key === 'ArrowLeft' && items.length > 1) {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateLightbox(currentIndex);
        } else if (e.key === 'ArrowRight' && items.length > 1) {
            currentIndex = (currentIndex + 1) % items.length;
            updateLightbox(currentIndex);
        }
    });
});
</script>
