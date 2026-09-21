<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packing & Moving',
    'bc_desc' => "Comprehensive end-to-end packing and moving solutions across India with 7-layer export quality materials, custom wooden crating, anti-shock cushioning, and transit insurance.",
    'breadcrumbs' => [
        ['name' => 'Packing & Moving']
    ]
]); ?>

<!-- 1. Hero Overview Section (Full Width Content on col-12) -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-12">
                
                <!-- Header Badge & Title Block -->
                <div class="mb-4">
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                        <span class="service-pill-tag">
                            <i class="bi bi-shield-check"></i> Export-Grade Material Standards
                        </span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-monospace small">
                            <i class="bi bi-patch-check-fill text-warning me-1"></i> IBA Approved &bull; ISO Certified
                        </span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill small">
                            <i class="bi bi-box-seam me-1"></i> 100% Zero-Breakage Packaging
                        </span>
                    </div>

                    <h2 class="fw-bold text-dark display-6 mb-3">
                        Scientific Packing &amp; Moving Services Across India
                    </h2>
                    
                    <p class="text-secondary lead fs-6 lh-lg mb-0" style="max-width: 1050px;">
                        A successful relocation depends directly on the structural integrity of the packing materials and technique. At <strong><?= $company3 ?></strong>, we never cut corners with cheap newspapers or single-ply boxes. We engineer custom multi-layer protective barriers utilizing 5-ply and 7-ply corrugated cartons, heavy-gauge virgin bubble film, moisture-proof stretch wrap, edge corner guards, and tailored wooden crates.
                    </p>
                </div>

                <!-- 4 Core Technical Safeguards Grid across col-12 -->
                <div class="row g-3 g-lg-4 mb-4">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-layers-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">7-Layer Armor Wrap</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Anti-static air bubble film, corrugated cardboard sheeting, thermocol corner buffers, and waterproof shrink film.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-box-seam-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Custom Wooden Crates</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Bespoke ISPM-compliant timber crates fabricated on-site for antique chandeliers, marble statues, and large LED TVs.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-shield-lock-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Security Box Sealing</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Tamper-evident branded adhesive tape and serialized barcode seals ensuring cartons cannot be opened unnoticed in transit.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-truck-front-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Weatherproof Fleet</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Clean, carpet-padded, enclosed steel container trucks isolating packed goods from monsoon rain, dust, and highway vibration.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Highlight Trust & Reassurance Bar with CTAs -->
                <div class="service-hero-cta-box p-4 rounded-4 border d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Zero Recycled Material</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Master In-House Packers</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Pan-India Transit Network</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Free Detailed Survey</span>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" class="btn btn-warning py-2 px-4 fw-bold rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-calculator me-1"></i> Get Packing Quote
                        </button>
                        <a <?= $phonehtml ?> class="btn btn-outline-dark py-2 px-4 fw-bold rounded-pill">
                            <i class="bi bi-telephone-fill text-warning me-1"></i> <?= $phone ?>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 2. Packaging Material & Item Categories -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-boxes"></i> Material Engineering
            </span>
            <h2 class="fw-bold text-dark mb-3">Specialized Packing Solutions by Item Type</h2>
            <p class="text-muted small mb-0">
                Different household and commercial items have unique shock tolerances. Our packaging protocols are engineered specifically for each item category.
            </p>
        </div>

        <div class="row g-4">
            <!-- Category 1: Fragile Glassware & Crockery -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-cup-hot"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Glassware &amp; Chinaware</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Delicate &amp; Fragile</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Individually wrapped in clean butcher paper, air bubble film, and packed into cell-partitioned corrugated dish-barrels.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Cell-Partitioned Boxes
                    </div>
                </div>
            </div>

            <!-- Category 2: Wooden & Leather Furniture -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-lamp-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Furniture &amp; Leather</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Scratch Protection</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Breathable foam blankets and heavy-gauge corrugated edge armor shielding carved wood, polished lacquer, and soft leather.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Corner Guards &amp; Blankets
                    </div>
                </div>
            </div>

            <!-- Category 3: Electronics & Appliances -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-tv"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">LED TVs &amp; Home Theatre</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Shockproof Padding</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        EPE foam screen buffers, antistatic film, and heavy-duty double-wall TV cartons protecting OLED/QLED displays from impact.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Screen Buffer Shields
                    </div>
                </div>
            </div>

            <!-- Category 4: Wardrobe, Books & Linens -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-handbag"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Wardrobe &amp; Garments</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Wrinkle-Free Transport</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Specialized upright wardrobe boxes with metal hanging bars for suits, evening gowns, and silk sarees directly from closets.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Hanging Wardrobe Boxes
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 3. Step-by-Step Packing Protocol -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-diagram-3"></i> Packaging Protocol
            </span>
            <h2 class="fw-bold text-dark mb-3">Our 4-Stage Zero-Damage Packing Protocol</h2>
            <p class="text-muted small mb-0">
                A meticulous operational process that prevents transit shocks, corner crushing, and accidental box collapses.
            </p>
        </div>

        <div class="row g-4">
            <!-- Step 01 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">01</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-calculator"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Material Estimation</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Our lead packaging supervisor calculates exact quantities of bubble rolls, carton sizes, and tape rolls to ensure zero material shortfall on moving day.
                    </p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">02</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-layers"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Multi-Layer Wrapping</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Each item receives tailored wrapping—bubble wrap for surfaces, corner protectors for edges, and heavy shrink wrap for moisture and dust barrier.
                    </p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">03</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Cavity Cushioning</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Empty spaces inside cartons are filled with bio-degradable foam chips or crushed paper, ensuring boxed items cannot move, vibrate, or rattle.
                    </p>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">04</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-tags"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Barcode Labeling</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Every sealed carton is tagged with a room color code and numbered on the inventory docket, ensuring complete traceability at the destination.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 4. Preparation Checklist & Tips -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-card-checklist"></i> Packaging Checklist
            </span>
            <h2 class="fw-bold text-dark mb-3">Pre-Packing Day Preparation Checklist</h2>
            <p class="text-muted small mb-0">
                Follow these simple steps before our packing team arrives to make the process swift and organized.
            </p>
        </div>

        <div class="row g-4">
            <!-- Col 1: Declutter & Categorize -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-warning-subtle text-warning-emphasis rounded-3">
                            <i class="bi bi-check2-all fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Declutter &amp; Categorize</h5>
                            <span class="text-muted small">Streamline your inventory prior to packing</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-trash text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Discard Outdated &amp; Broken Items</strong>
                                <span class="text-muted small">Moving volume affects cost; discard expired cosmetics, broken plasticware, and unread magazines.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-gem text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Segregate High-Value Jewellery &amp; Documents</strong>
                                <span class="text-muted small">Keep personal cash, bank locker keys, gold, and passports safely in your personal handbag.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-heart-pulse text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Pack Priority Medications &amp; Toiletries</strong>
                                <span class="text-muted small">Keep essential daily medicine, phone chargers, and baby supplies in an accessible travel bag.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Col 2: Hazardous & Prohibited Items -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-primary-subtle text-primary rounded-3">
                            <i class="bi bi-exclamation-octagon-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Prohibited Non-Transport Items</h5>
                            <span class="text-muted small">Safety exclusions for truck loading</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-fire text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">No Inflammable Liquids or Chemicals</strong>
                                <span class="text-muted small">Paints, kerosene, thinners, nail polish removers, and fireworks are strictly barred from moving vans.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-egg-fried text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">No Perishable Cooked Food Items</strong>
                                <span class="text-muted small">Cooked gravies, dairy, and opened food items spoil rapidly during transit and attract pests.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-tree text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Dry Soil Pots for Live Houseplants</strong>
                                <span class="text-muted small">Do not water potted plants for 24 hours prior to moving to prevent mud leakage onto cardboard boxes.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 5. Specialized Packing & Moving FAQs -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-patch-question"></i> Clarifications &amp; Queries
            </span>
            <h2 class="fw-bold text-dark mb-3">Frequently Asked Questions on Packing &amp; Moving</h2>
            <p class="text-muted small mb-0">
                Key questions about material quality, custom wooden crates, insurance rules, and packing timelines.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-10">
                <div class="accordion service-faq-accordion" id="packFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingPack1">
                            <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePack1" aria-expanded="true" aria-controls="collapsePack1">
                                <span class="service-faq-icon">
                                    <i class="bi bi-box-seam"></i>
                                </span>
                                <span class="service-faq-title">What materials are included in your standard packing service?</span>
                            </button>
                        </h3>
                        <div id="collapsePack1" class="accordion-collapse collapse show" aria-labelledby="headingPack1" data-bs-parent="#packFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Our comprehensive moving packages include virgin heavy-gauge air bubble film, 5-ply and 7-ply corrugated cartons, high-tensile stretch wrap, foam edge guards, moisture-resistant packaging tape, tissue paper for delicate crockery, and heavy-duty wardrobe boxes.
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>All cartons and bubble rolls supplied are 100% brand new, clean, and sturdy.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingPack2">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePack2" aria-expanded="false" aria-controls="collapsePack2">
                                <span class="service-faq-icon">
                                    <i class="bi bi-shield-x"></i>
                                </span>
                                <span class="service-faq-title">Why should I avoid DIY packing with old newspapers and grocery boxes?</span>
                            </button>
                        </h3>
                        <div id="collapsePack2" class="accordion-collapse collapse" aria-labelledby="headingPack2" data-bs-parent="#packFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Old grocery boxes are single-ply and weaken easily under truck weight, causing bottom drop-outs. Furthermore, acidic newspaper ink transfers onto expensive ceramics and bone china, requiring tedious cleaning. Our double-wall cartons with cellular dividers eliminate crushing risks.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingPack3">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePack3" aria-expanded="false" aria-controls="collapsePack3">
                                <span class="service-faq-icon">
                                    <i class="bi bi-box"></i>
                                </span>
                                <span class="service-faq-title">Do you build custom wooden crates on-site for valuable artworks?</span>
                            </button>
                        </h3>
                        <div id="collapsePack3" class="accordion-collapse collapse" aria-labelledby="headingPack3" data-bs-parent="#packFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. For fragile oil paintings, antique mirrors, glass dining table tops, marble idols, and high-end televisions, our carpenters build bespoke timber crates on-site with internal high-density foam suspension pads for 360-degree impact protection.
                                <div class="service-faq-tip">
                                    <i class="bi bi-patch-check-fill text-success"></i> <span>Custom timber crates provide maximum shock resistance for fragile heirlooms.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingPack4">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePack4" aria-expanded="false" aria-controls="collapsePack4">
                                <span class="service-faq-icon">
                                    <i class="bi bi-clock-history"></i>
                                </span>
                                <span class="service-faq-title">How long does it take to pack a typical 2 BHK or 3 BHK home?</span>
                            </button>
                        </h3>
                        <div id="collapsePack4" class="accordion-collapse collapse" aria-labelledby="headingPack4" data-bs-parent="#packFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                For a standard 2 BHK home, our team of 4 to 5 professional packers typically finishes all wrapping and boxing within 4 to 6 hours. For a 3 BHK or 4 BHK home, it takes approximately 6 to 8 hours. We can also begin packing non-essential rooms one day prior to moving day.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingPack5">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePack5" aria-expanded="false" aria-controls="collapsePack5">
                                <span class="service-faq-icon">
                                    <i class="bi bi-shield-fill-check"></i>
                                </span>
                                <span class="service-faq-title">Does transit insurance cover items packed by the customer?</span>
                            </button>
                        </h3>
                        <div id="collapsePack5" class="accordion-collapse collapse" aria-labelledby="headingPack5" data-bs-parent="#packFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Insurance underwriters strictly mandate that all high-value and fragile goods must be packed or inspected by certified movers to validate claim liability. When <?= $company3 ?> packs your items, they are fully covered under our comprehensive transit insurance policy.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingPack6">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePack6" aria-expanded="false" aria-controls="collapsePack6">
                                <span class="service-faq-icon">
                                    <i class="bi bi-arrow-repeat"></i>
                                </span>
                                <span class="service-faq-title">Do you take away empty cartons and packing materials after unpacking?</span>
                            </button>
                        </h3>
                        <div id="collapsePack6" class="accordion-collapse collapse" aria-labelledby="headingPack6" data-bs-parent="#packFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. Once all your furniture and priority cartons are unpacked and arranged in your designated rooms, our crew gathers and removes all used cardboard boxes, bubble wrap cuttings, and plastic film, ensuring your new residence remains tidy and clean.
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Still Have Questions CTA Banner -->
                <div class="service-faq-cta-banner mt-4 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 text-center text-md-start">
                    <div class="d-flex align-items-center gap-3">
                        <div class="service-faq-icon bg-warning text-dark flex-shrink-0">
                            <i class="bi bi-headset fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Need premium packing materials or full-service moving?</h6>
                            <p class="text-muted small mb-0">Our relocation specialists are available 24/7 to provide instant quotes.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-shrink-0">
                        <a <?= $phonehtml ?> class="btn btn-warning btn-sm fw-bold px-3 py-2 rounded-pill shadow-sm">
                            <i class="bi bi-telephone-fill me-1"></i> Call Specialist
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" class="btn btn-outline-dark btn-sm fw-semibold px-3 py-2 rounded-pill">
                            <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>