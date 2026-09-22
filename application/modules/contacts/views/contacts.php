<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us',
    'bc_desc' => 'Connect with our relocation specialists for immediate assistance, corporate tie-ups & free estimates',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<?php
// Normalize phone numbers for clean tel and whatsapp links
$clean_phone = isset($phone) ? preg_replace('/[^0-9+]/', '', $phone) : '+917566809037';
$clean_phone_digits = preg_replace('/[^0-9]/', '', $clean_phone);
$wa_link = !empty($whatsapphtml) ? $whatsapphtml : "https://wa.me/{$clean_phone_digits}";
$company_name = !empty($company3) ? $company3 : 'TCI Relocation Packers Movers';
$office_address = !empty($address) ? $address : 'Plot No. 81, Prem Sagar Colony, Narayan Vihar, Mansarovar, Jaipur, Rajasthan – 302026';
$support_email = !empty($mail) ? $mail : 'support@mycompany.com';
?>

<!-- Main Contact Page Wrapper -->
<div class="cnt-page-wrapper py-5 position-relative">
    <!-- Ambient Background Glows -->
    <div class="cnt-bg-glow-1"></div>
    <div class="cnt-bg-glow-2"></div>

    <div class="container position-relative z-1 py-lg-2">

        <!-- Top Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="cnt-badge mb-2">
                <i class="bi bi-chat-heart-fill"></i> Get in Touch
            </span>
            <h2 class="fw-bold cnt-form-heading mb-2">
                We Are Here To Assist Your <span class="cnt-title-highlight">Relocation</span>
            </h2>
            <p class="text-muted small mx-auto max-w-650 mb-0" style="max-width: 620px;">
                Have queries regarding shifting estimates, vehicle allocation, or moving schedules? Our support coordinators are available round the clock.
            </p>
        </div>

        <!-- 4-Card Quick Connect Grid -->
        <div class="row g-3 g-lg-4 mb-4 mb-lg-5 cnt-quick-grid">
            
            <!-- Card 1: 24/7 Helpline -->
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="tel:<?= $clean_phone ?>" class="cnt-quick-card">
                    <div class="cnt-quick-header">
                        <div class="cnt-quick-icon-wrap cnt-icon-phone">
                            <i class="bi bi-telephone-outbound-fill"></i>
                        </div>
                        <div class="cnt-quick-title">24/7 Helpline</div>
                    </div>
                    <div class="cnt-quick-value"><?= !empty($phone) ? $phone : '+91 7566809037' ?></div>
                    <div class="cnt-quick-sub">Direct line for instant quotation &amp; booking support.</div>
                    <div class="cnt-quick-action">
                        <span>Call Now</span>
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
            </div>

            <!-- Card 2: WhatsApp Chat -->
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer" class="cnt-quick-card">
                    <div class="cnt-quick-header">
                        <div class="cnt-quick-icon-wrap cnt-icon-whatsapp">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div class="cnt-quick-title">WhatsApp Chat</div>
                    </div>
                    <div class="cnt-quick-value">Instant Connect</div>
                    <div class="cnt-quick-sub">Send photos/inventory for rapid estimated quote.</div>
                    <div class="cnt-quick-action">
                        <span>Chat on WhatsApp</span>
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
            </div>

            <!-- Card 3: Email Support -->
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="mailto:<?= $support_email ?>" class="cnt-quick-card">
                    <div class="cnt-quick-header">
                        <div class="cnt-quick-icon-wrap cnt-icon-mail">
                            <i class="bi bi-envelope-at-fill"></i>
                        </div>
                        <div class="cnt-quick-title">Official Email</div>
                    </div>
                    <div class="cnt-quick-value text-truncate"><?= $support_email ?></div>
                    <div class="cnt-quick-sub">Replies guaranteed within 2 business hours.</div>
                    <div class="cnt-quick-action">
                        <span>Email Desk</span>
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
            </div>

            <!-- Card 4: Corporate Office -->
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="#cntMapSection" class="cnt-quick-card">
                    <div class="cnt-quick-header">
                        <div class="cnt-quick-icon-wrap cnt-icon-office">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="cnt-quick-title">Office</div>
                    </div>
                    <div class="cnt-quick-value">Jaipur, Rajasthan</div>
                    <div class="cnt-quick-sub">Visit our corporate desk for corporate agreements.</div>
                    <div class="cnt-quick-action">
                        <span>View On Map</span>
                        <i class="bi bi-arrow-down-short"></i>
                    </div>
                </a>
            </div>

        </div>

        <!-- Main Content Area: Form (col-lg-7) + Side Info (col-lg-5) -->
        <div class="row g-4 g-lg-5 cnt-main-row">
            
            <!-- Left Column: Interactive Form Card -->
            <div class="col-12 col-lg-7 cnt-col-left">
                <div class="cnt-form-box h-100">
                    
                    <!-- Decorative Background Watermark -->
                    <div class="cnt-box-corner-watermark">
                        <i class="bi bi-send-check"></i>
                    </div>
                    
                    <div class="cnt-form-header-badge align-self-start">
                        <span class="cnt-pulse-dot"></span>
                        <i class="bi bi-lightning-charge-fill text-warning"></i>
                        <span>15-Minute Response Guaranteed</span>
                    </div>

                    <h3 class="cnt-form-heading">
                        Send Us A <span class="cnt-title-highlight">Message</span>
                    </h3>
                    <p class="cnt-form-desc">
                        Provide your move specifics below. Our logistics coordinator will reach out with a personalized, transparent shifting estimate.
                    </p>

                    <!-- The AJAX Form -->
                    <form id="contactform" class="ajax-form" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">

                        <!-- Pill Input Fields with Icons and Floating Labels -->
                        <div class="row g-2 g-md-3">
                            <div class="col-12 col-md-6">
                                <div class="form-floating cnt-floating-wrap has-icon">
                                    <i class="bi bi-person cnt-field-icon"></i>
                                    <input type="text" name="name" class="form-control cnt-pill-control" id="cnt_name" placeholder="Full Name*" required>
                                    <label for="cnt_name">Full Name*</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating cnt-floating-wrap has-icon">
                                    <i class="bi bi-telephone cnt-field-icon"></i>
                                    <input type="tel" name="phone" class="form-control cnt-pill-control" id="cnt_phone" placeholder="Phone no.*" required maxlength="10">
                                    <label for="cnt_phone">Phone no.* (10 Digits)</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating cnt-floating-wrap has-icon">
                                    <i class="bi bi-envelope cnt-field-icon"></i>
                                    <input type="email" name="email" class="form-control cnt-pill-control" id="cnt_email" placeholder="Email Address (Optional)">
                                    <label for="cnt_email">Email Address (Optional)</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating cnt-floating-wrap has-icon is-textarea">
                                    <i class="bi bi-chat-left-text cnt-field-icon"></i>
                                    <textarea name="message" class="form-control cnt-pill-control cnt-pill-textarea" id="cnt_message" placeholder="Message / Moving details..."></textarea>
                                    <label for="cnt_message">Message / Moving details...</label>
                                </div>
                            </div>
                        </div>

                        <!-- Pill Submit & Clear Buttons -->
                        <div class="cnt-submit-wrap d-flex align-items-center gap-3">
                            <button type="submit" class="cnt-pill-submit-btn">
                                <span>SUBMIT REQUEST</span>
                                <i class="bi bi-send-fill"></i>
                            </button>
                            <button type="reset" class="cnt-pill-clear-btn" id="cntClearBtn">
                                <i class="bi bi-arrow-counterclockwise"></i>
                                <span>CLEAR</span>
                            </button>
                        </div>

                        <!-- Result Container -->
                        <div id="contactformresults" class="mt-3"></div>
                    </form>

                    <!-- Trust Reassurance Micro Strip -->
                    <div class="cnt-trust-strip">
                        <div class="cnt-trust-item">
                            <i class="bi bi-shield-check"></i>
                            <span>100% Privacy &amp; Zero Spam</span>
                        </div>
                        <div class="cnt-trust-item">
                            <i class="bi bi-patch-check"></i>
                            <span>IBA Approved Transporter</span>
                        </div>
                        <div class="cnt-trust-item">
                            <i class="bi bi-clock-history"></i>
                            <span>Instant Free Estimate</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column: Map, Office Hours & Emergency Desk -->
            <div class="col-12 col-lg-5 cnt-side-col cnt-col-right" id="cntMapSection">
                
                <!-- Office Information Box with Map -->
                <div class="cnt-info-box h-100">
                    <div class="cnt-info-box-title">
                        <i class="bi bi-building"></i>
                        <span>Corporate Headquarters</span>
                    </div>

                    <!-- Responsive Google Maps Embed -->
                    <div class="cnt-map-container">
                        <iframe
                            class="cnt-map-iframe"
                            src="https://www.google.com/maps?q=<?= urlencode($office_address) ?>&amp;hl=en&amp;z=15&amp;output=embed"
                            loading="lazy"
                            allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade"
                            title="<?= htmlspecialchars($company_name) ?> Office Map">
                        </iframe>
                        <div class="cnt-map-badge">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Jaipur Hub, Rajasthan</span>
                        </div>
                    </div>

                    <!-- Details List -->
                    <ul class="cnt-detail-list">
                        <li class="cnt-detail-item">
                            <div class="cnt-detail-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <div class="cnt-detail-lbl">Office Address</div>
                                <div class="cnt-detail-val"><?= $office_address ?></div>
                            </div>
                        </li>

                        <li class="cnt-detail-item">
                            <div class="cnt-detail-icon">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div>
                                <div class="cnt-detail-lbl">Operating Hours</div>
                                <div class="cnt-detail-val">
                                    <span class="cnt-live-pulse"></span>
                                    Mon &ndash; Sun: 8:00 AM &ndash; 9:00 PM IST
                                </div>
                            </div>
                        </li>

                        <li class="cnt-detail-item">
                            <div class="cnt-detail-icon">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div>
                                <div class="cnt-detail-lbl">Support Availability</div>
                                <div class="cnt-detail-val">24/7 Emergency Dispatch &amp; Live Tracking</div>
                            </div>
                        </li>
                    </ul>

                    <!-- One-Tap Action Buttons -->
                    <div class="cnt-side-actions">
                        <a href="tel:<?= $clean_phone ?>" class="cnt-side-btn cnt-side-btn-call">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                        <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer" class="cnt-side-btn cnt-side-btn-wa">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <a href="https://maps.google.com/?q=<?= urlencode($office_address) ?>" target="_blank" rel="noopener noreferrer" class="cnt-side-btn cnt-side-btn-dir">
                            <i class="bi bi-cursor-fill"></i> Directions
                        </a>
                    </div>

                </div>


            </div>

        </div>

        <!-- Frequently Asked Questions Strip -->
        <div class="cnt-faq-box">
            <div class="text-center mb-4">
                <span class="cnt-badge mb-2">
                    <i class="bi bi-question-circle-fill"></i> Quick Answers
                </span>
                <h3 class="fw-bold cnt-form-heading mb-1">
                    Frequently Asked <span class="cnt-title-highlight">Questions</span>
                </h3>
                <p class="text-muted small mb-0">
                    Common questions regarding booking, surveys, and door-to-door moving assistance.
                </p>
            </div>

            <div class="accordion cnt-faq-accordion" id="cntFaqAccordion">
                
                <!-- Q1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cntHeadingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cntCollapseOne" aria-expanded="true" aria-controls="cntCollapseOne">
                            How fast will I receive a quote after submitting this form?
                        </button>
                    </h2>
                    <div id="cntCollapseOne" class="accordion-collapse collapse show" aria-labelledby="cntHeadingOne" data-bs-parent="#cntFaqAccordion">
                        <div class="accordion-body">
                            Our dedicated relocation team reviews moving inquiries promptly. You will receive a call or WhatsApp estimate with full cost breakdown within 15 minutes during operating hours.
                        </div>
                    </div>
                </div>

                <!-- Q2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cntHeadingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cntCollapseTwo" aria-expanded="false" aria-controls="cntCollapseTwo">
                            Do you provide a physical or video pre-move survey?
                        </button>
                    </h2>
                    <div id="cntCollapseTwo" class="accordion-collapse collapse" aria-labelledby="cntHeadingTwo" data-bs-parent="#cntFaqAccordion">
                        <div class="accordion-body">
                            Yes! We offer 100% free doorstep surveys or video call surveys to assess your household or office inventory, ensuring an accurate and transparent quote with zero hidden charges.
                        </div>
                    </div>
                </div>

                <!-- Q3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cntHeadingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cntCollapseThree" aria-expanded="false" aria-controls="cntCollapseThree">
                            Are my goods insured during transit?
                        </button>
                    </h2>
                    <div id="cntCollapseThree" class="accordion-collapse collapse" aria-labelledby="cntHeadingThree" data-bs-parent="#cntFaqAccordion">
                        <div class="accordion-body">
                            Absolutely. We offer comprehensive all-risk transit insurance and IBA-approved documentation to safeguard all household furniture, electronics, and vehicles against accidental damage.
                        </div>
                    </div>
                </div>

                <!-- Q4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cntHeadingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cntCollapseFour" aria-expanded="false" aria-controls="cntCollapseFour">
                            Can I schedule a shifting on weekends or public holidays?
                        </button>
                    </h2>
                    <div id="cntCollapseFour" class="accordion-collapse collapse" aria-labelledby="cntHeadingFour" data-bs-parent="#cntFaqAccordion">
                        <div class="accordion-body">
                            Yes, our operations operate 365 days a year without holidays. You can schedule packing, loading, and delivery on any day that suits your convenience at no additional surge charge.
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const clearBtn = document.getElementById('cntClearBtn');
    if (clearBtn) {
        clearBtn.addEventListener('click', function () {
            const resultBox = document.getElementById('contactformresults');
            if (resultBox) resultBox.innerHTML = '';
        });
    }
});
</script>