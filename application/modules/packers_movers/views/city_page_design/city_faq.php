<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<!-- City FAQs Section with Schema JSON-LD -->
<section class="py-5 city-faq-section border-bottom position-relative">
    <div class="container py-lg-3">

        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="city-section-badge mb-2">
                <i class="bi bi-question-circle-fill"></i> Clear Answers
            </span>
            <h2 class="fw-bold text-dark display-6 mb-2">
                Frequently Asked Questions in <span class="city-title-highlight"><?= $city ?></span>
            </h2>
            <div class="pm-title-line">
                <span class="pm-line-bar"></span>
                <span class="pm-line-dot"></span>
            </div>
            <p class="text-muted small mx-auto max-w-650 mb-0">
                Transparent information regarding shifting quotes, packing safety standards, transit insurance, and scheduling in <?= $city ?>.
            </p>
        </div>

        <div class="row g-4">
            
            <!-- Accordion Column (8 Cols) -->
            <div class="col-12 col-lg-8">
                <div class="accordion" id="cityFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="city-faq-item">
                        <h3 class="accordion-header" id="headingCityFaq1">
                            <button class="accordion-button city-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCityFaq1" aria-expanded="true" aria-controls="collapseCityFaq1">
                                How are packing and moving charges calculated in <?= $city ?>?
                            </button>
                        </h3>
                        <div id="collapseCityFaq1" class="accordion-collapse collapse show" aria-labelledby="headingCityFaq1" data-bs-parent="#cityFaqAccordion">
                            <div class="city-faq-body">
                                Shifting estimates in <?= $city ?> depend primarily on your total volume of household goods (1BHK, 2BHK, 3BHK or villa), the moving distance, building floor numbers, elevator access, and packing grade required. We provide a 100% itemized, written quote with zero hidden surcharges on moving day.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="city-faq-item">
                        <h3 class="accordion-header" id="headingCityFaq2">
                            <button class="accordion-button city-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCityFaq2" aria-expanded="false" aria-controls="collapseCityFaq2">
                                Do you offer doorstep home inspection or video surveys in <?= $city ?>?
                            </button>
                        </h3>
                        <div id="collapseCityFaq2" class="accordion-collapse collapse" aria-labelledby="headingCityFaq2" data-bs-parent="#cityFaqAccordion">
                            <div class="city-faq-body">
                                Yes. We provide complimentary physical doorstep surveys in <?= $city ?> as well as 10-minute quick WhatsApp video surveys. Our move officer reviews your belongings, society parking access, and elevator permissions to provide an accurate, guaranteed fixed quote.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="city-faq-item">
                        <h3 class="accordion-header" id="headingCityFaq3">
                            <button class="accordion-button city-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCityFaq3" aria-expanded="false" aria-controls="collapseCityFaq3">
                                How early should I book my relocation slot in <?= $city ?>?
                            </button>
                        </h3>
                        <div id="collapseCityFaq3" class="accordion-collapse collapse" aria-labelledby="headingCityFaq3" data-bs-parent="#cityFaqAccordion">
                            <div class="city-faq-body">
                                For local shifting within <?= $city ?>, 2 to 3 days advance notice is sufficient. For interstate moves across <?= !empty($state) ? $state : 'the country' ?>, or moves during month-end rush periods, booking 5 to 7 days ahead guarantees dedicated container allocation and preferred morning packing slots.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="city-faq-item">
                        <h3 class="accordion-header" id="headingCityFaq4">
                            <button class="accordion-button city-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCityFaq4" aria-expanded="false" aria-controls="collapseCityFaq4">
                                Is transit insurance provided for goods moving from <?= $city ?>?
                            </button>
                        </h3>
                        <div id="collapseCityFaq4" class="accordion-collapse collapse" aria-labelledby="headingCityFaq4" data-bs-parent="#cityFaqAccordion">
                            <div class="city-faq-body">
                                Yes. We offer comprehensive 100% declared-value transit insurance covering unforeseen road hazards, transit accidents, fire, and collision. In the rare event of transit damage, our central claims coordinator ensures straightforward and swift settlement.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Side Help Box (4 Cols) -->
            <div class="col-12 col-lg-4">
                <div class="city-faq-help-box h-100 d-flex flex-column justify-content-center">
                    <div class="city-bento-icon mx-auto mb-3 city-icon-lg">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h4 class="fw-bold text-dark fs-5 mb-2">Have a Specific Question?</h4>
                    <p class="text-muted small mb-4 lh-base">
                        Our central branch logistics desk in <?= $city ?> is available round the clock to discuss custom requirements, vehicle allocations, or special crating needs.
                    </p>
                    <div class="d-flex flex-column gap-2">
                        <a <?= $phonehtml ?> class="btn btn-warning fw-bold px-4 py-2 rounded-pill shadow-sm">
                            <i class="bi bi-telephone-fill me-1"></i> Call Specialist
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" class="btn btn-outline-dark fw-bold px-4 py-2 rounded-pill">
                            <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp Us
                        </a>
                    </div>
                    <div class="pt-3 mt-4 border-top text-muted small">
                        <i class="bi bi-clock-history me-1 text-warning"></i> Instant response in 5 minutes
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- FAQ Schema JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How are packing and moving charges calculated in <?= addslashes($city) ?>?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Shifting estimates in <?= addslashes($city) ?> depend on household volume (1BHK, 2BHK, 3BHK), distance, floor level, elevator access, and packing grade required. We provide 100% itemized, written quotes with zero hidden charges."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer doorstep home inspection or video surveys in <?= addslashes($city) ?>?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide complimentary physical doorstep surveys in <?= addslashes($city) ?> as well as 10-minute quick WhatsApp video surveys to provide an accurate, guaranteed fixed quote."
      }
    },
    {
      "@type": "Question",
      "name": "How early should I book my relocation slot in <?= addslashes($city) ?>?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For local moves within <?= addslashes($city) ?>, 2 to 3 days advance notice is sufficient. For interstate moves, booking 5 to 7 days ahead guarantees dedicated container allocation and preferred morning packing slots."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance provided for goods moving from <?= addslashes($city) ?>?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer comprehensive 100% declared-value transit insurance covering accidental road hazards, transit accidents, fire, and collision with swift claim settlements."
      }
    },
    {
      "@type": "Question",
      "name": "Will your team dismantle and reassemble modular furniture?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our verified staff carries standard mechanical toolkits to dismantle and safely reassemble king/queen modular beds, dining tables, study units, and wardrobe mirrors."
      }
    },
    {
      "@type": "Question",
      "name": "Can <?= addslashes($company3) ?> transport my bike or car from <?= addslashes($city) ?>?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we operate specialized car carriers and enclosed two-wheeler trucks with pneumatic wheel chocks and safety tie-down ratchets for damage-free vehicle relocation."
      }
    }
  ]
}
</script>
