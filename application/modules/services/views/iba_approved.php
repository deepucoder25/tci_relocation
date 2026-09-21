<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'IBA Approved Movers',
    'bc_desc' => "Indian Banks' Association (IBA) approved packers and movers providing 100% audit-compliant relocation, GST billing, and priority claims for bank and PSU transfers.",
    'breadcrumbs' => [
        ['name' => 'IBA Approved Movers']
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
                            <i class="bi bi-award-fill"></i> IBA Certified Logistics Partner
                        </span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-monospace small">
                            <i class="bi bi-patch-check-fill text-warning me-1"></i> IBA Approved &bull; ISO Certified
                        </span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill small">
                            <i class="bi bi-bank2 me-1"></i> Bank Reimbursement Ready
                        </span>
                    </div>

                    <h2 class="fw-bold text-dark display-6 mb-3">
                        Government &amp; Bank Recognized IBA Approved Packers &amp; Movers
                    </h2>
                    
                    <p class="text-secondary lead fs-6 lh-lg mb-0" style="max-width: 1050px;">
                        When transferred to a new city, bank employees, defense personnel, and public sector officers require relocations that strictly comply with official reimbursement policies. At <strong><?= $company3 ?></strong>, we are an Indian Banks' Association (IBA) approved transport operator offering verified registration codes, authentic GST consignment dockets (Bilty), and complete audit-ready documentation for hassle-free claim settlement.
                    </p>
                </div>

                <!-- 4 Core Technical Safeguards Grid across col-12 -->
                <div class="row g-3 g-lg-4 mb-4">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Official IBA Code</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Authentic IBA recommendation code accredited and listed across Indian nationalized and private banking networks.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-file-earmark-check-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Audit-Ready Invoicing</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                GST-compliant tax invoices, stamped consignment notes (Bilty), itemized inventory sheets, and money receipts.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">100% Claim Clearance</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Full compliance with HR relocation allowances of SBI, PNB, BoB, Canara Bank, LIC, ONGC, and central ministries.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">All-Risk Marine Transit</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Direct transit insurance policies through leading national public underwriters covering household effects and vehicles.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Highlight Trust & Reassurance Bar with CTAs -->
                <div class="service-hero-cta-box p-4 rounded-4 border d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Active IBA Recommendation Code</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">3 Comparative Quotes Provided</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Pan-India Doorstep Delivery</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">GST &amp; E-Way Bill Compliant</span>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" class="btn btn-warning py-2 px-4 fw-bold rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-file-earmark-text me-1"></i> Get IBA Quotation
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

<!-- 2. Beneficiary Sectors -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-person-badge"></i> Institutional Sectors
            </span>
            <h2 class="fw-bold text-dark mb-3">Trusted by Employees Across Premier Institutions</h2>
            <p class="text-muted small mb-0">
                Our documentation matches the exact shifting reimbursement parameters across government, military, banking, and public undertakings.
            </p>
        </div>

        <div class="row g-4">
            <!-- Category 1: Nationalized & Commercial Banks -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-bank"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Banking Personnel</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">PSU &amp; Private Banks</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Relocation dockets complying with staff transfer regulations for SBI, PNB, Bank of Baroda, Union Bank, and Canara Bank.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Official IBA Bilty Included
                    </div>
                </div>
            </div>

            <!-- Category 2: Defense & Military -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Defense &amp; Paramilitary</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Armed Forces</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Dedicated cantonment gate clearance for Army, Navy, Air Force, CRPF, and BSF officers shifting across stations.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Station Transfer Friendly
                    </div>
                </div>
            </div>

            <!-- Category 3: Public Sector Undertakings (PSUs) -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-building"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Central PSUs &amp; Govt</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Public Enterprises</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Complete documentation conforming to grade-wise luggage weight entitlements for ONGC, BHEL, NTPC, IOCL, and Railways.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Weight Slips Provided
                    </div>
                </div>
            </div>

            <!-- Category 4: Corporate Transfers -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Corporate Executives</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">MNC Allowances</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Turnkey corporate relocations with consolidated corporate invoices and direct employer billing agreements.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Corporate PO Billing
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 3. Step-by-Step IBA Reimbursement Process -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-diagram-3"></i> Protocol Stepper
            </span>
            <h2 class="fw-bold text-dark mb-3">4-Step IBA Relocation &amp; Billing Process</h2>
            <p class="text-muted small mb-0">
                From initial survey quotation to final reimbursement packet submission, we simplify your institutional claim procedures.
            </p>
        </div>

        <div class="row g-4">
            <!-- Step 01 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">01</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-file-earmark-ruled"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Quotation Submission</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        We generate authentic, competitive relocation estimates (along with comparative vendor quotes if required by bank policy) on official letterhead.
                    </p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">02</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-boxes"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Packing &amp; Inventory</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Our crew wraps goods in certified export-grade materials, numbering each carton on an official serialized packing slip counter-signed by you.
                    </p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">03</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">IBA Stamped Bilty</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Goods are dispatched in closed container trucks under an official Consignment Note (Lorry Receipt / Bilty) stamped with our active IBA code.
                    </p>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">04</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-folder-check"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Full Claim Dossier</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Following delivery, we provide an organized reimbursement dossier containing the original tax invoice, money receipt, transit insurance policy, and lorry receipt.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 4. Preparation Checklist & Required Documents -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-file-earmark-check"></i> Documentation Set
            </span>
            <h2 class="fw-bold text-dark mb-3">Reimbursement Document Dossier Checklist</h2>
            <p class="text-muted small mb-0">
                We supply every mandatory bill, receipt, and certificate required by bank audit departments for prompt claim disbursement.
            </p>
        </div>

        <div class="row g-4">
            <!-- Col 1: Documents We Provide to You -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-warning-subtle text-warning-emphasis rounded-3">
                            <i class="bi bi-file-earmark-check-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Documents Provided by <?= $company3 ?></h5>
                            <span class="text-muted small">Standard compliance bills for audit reimbursement</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Original Lorry Receipt (LR / Bilty) with IBA Code</strong>
                                <span class="text-muted small">Official consignee copy bearing our active IBA registration code and vehicle dispatch details.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Computerized GST Tax Invoice &amp; Official Money Receipt</strong>
                                <span class="text-muted small">Itemized billing breakdown with valid GSTIN and revenue stamped money receipt.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Transit Insurance Policy Certificate &amp; Packing List</strong>
                                <span class="text-muted small">Underwriter issued marine risk policy certificate and serialized room-wise inventory sheet.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Col 2: Documents Required from Employee -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-primary-subtle text-primary rounded-3">
                            <i class="bi bi-person-vcard fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Details Needed from Transferee</h5>
                            <span class="text-muted small">Employee records for official consignment booking</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-file-earmark-person-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Official Transfer / Relieving Order Copy</strong>
                                <span class="text-muted small">Issued by your bank or PSU HR department indicating origin and destination branches.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-person-badge-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Employee ID &amp; Designation Code</strong>
                                <span class="text-muted small">Required to ensure the quotation and billing format matches your rank-wise moving allowance.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-geo-alt-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Destination Bank Branch / Quarter Address</strong>
                                <span class="text-muted small">Official address for destination consignment delivery and billing records.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 5. Specialized IBA Relocation FAQs -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-patch-question"></i> Clarifications &amp; Queries
            </span>
            <h2 class="fw-bold text-dark mb-3">Frequently Asked Questions on IBA Movers</h2>
            <p class="text-muted small mb-0">
                Key questions about IBA approval codes, bank reimbursement guidelines, and claim dockets answered transparently.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-10">
                <div class="accordion service-faq-accordion" id="ibaFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingIba1">
                            <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIba1" aria-expanded="true" aria-controls="collapseIba1">
                                <span class="service-faq-icon">
                                    <i class="bi bi-award"></i>
                                </span>
                                <span class="service-faq-title">What does IBA approval mean, and why is it mandatory for bank transfers?</span>
                            </button>
                        </h3>
                        <div id="collapseIba1" class="accordion-collapse collapse show" aria-labelledby="headingIba1" data-bs-parent="#ibaFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                The Indian Banks' Association (IBA) evaluates and recommends verified transport operators based on fleet maintenance, safety compliance, financial stability, and operational integrity. Public sector and nationalized banks require shifting bills to carry an active IBA code so that employees can receive 100% reimbursement without audit queries.
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>All our consignment dockets and invoices carry our active IBA recommendation code.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingIba2">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIba2" aria-expanded="false" aria-controls="collapseIba2">
                                <span class="service-faq-icon">
                                    <i class="bi bi-file-earmark-ruled"></i>
                                </span>
                                <span class="service-faq-title">Can you provide 2 or 3 comparative quotations required by bank policy?</span>
                            </button>
                        </h3>
                        <div id="collapseIba2" class="accordion-collapse collapse" aria-labelledby="headingIba2" data-bs-parent="#ibaFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. Many nationalized banks and PSUs mandate that employees submit two or three formal comparative moving quotations before booking. We assist you by generating the necessary comparative quotations adhering to standard rate-per-kilometer and packing metrics.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingIba3">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIba3" aria-expanded="false" aria-controls="collapseIba3">
                                <span class="service-faq-icon">
                                    <i class="bi bi-card-checklist"></i>
                                </span>
                                <span class="service-faq-title">What documents will I receive for my reimbursement claim?</span>
                            </button>
                        </h3>
                        <div id="collapseIba3" class="accordion-collapse collapse" aria-labelledby="headingIba3" data-bs-parent="#ibaFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Upon completion of your move, we provide a complete audit packet containing:
                                <ul class="list-unstyled mt-2 mb-0 d-flex flex-column gap-1 small text-muted">
                                    <li>&bull; <strong>Original Consignment Note (Lorry Receipt / Bilty)</strong> stamped with our IBA code.</li>
                                    <li>&bull; <strong>Computerized GST Tax Invoice</strong> matching bank claim formats.</li>
                                    <li>&bull; <strong>Official Revenue-Stamped Money Receipt</strong>.</li>
                                    <li>&bull; <strong>Transit Insurance Policy Certificate</strong>.</li>
                                    <li>&bull; <strong>Itemized Inventory Packing List</strong> with carton numbers.</li>
                                    <li>&bull; <strong>Car / Bike Condition Report</strong> (if vehicle relocation is included).</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingIba4">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIba4" aria-expanded="false" aria-controls="collapseIba4">
                                <span class="service-faq-icon">
                                    <i class="bi bi-car-front"></i>
                                </span>
                                <span class="service-faq-title">Can I transport my car or two-wheeler under the same IBA bill?</span>
                            </button>
                        </h3>
                        <div id="collapseIba4" class="accordion-collapse collapse" aria-labelledby="headingIba4" data-bs-parent="#ibaFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. Depending on your bank's transfer policy, vehicle transport can either be billed as a separate consignment note or consolidated into your primary moving invoice with distinct HSN codes for transparent audit inspection.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingIba5">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIba5" aria-expanded="false" aria-controls="collapseIba5">
                                <span class="service-faq-icon">
                                    <i class="bi bi-cash-coin"></i>
                                </span>
                                <span class="service-faq-title">Do you offer direct billing to the bank/employer or is it employee reimbursement?</span>
                            </button>
                        </h3>
                        <div id="collapseIba5" class="accordion-collapse collapse" aria-labelledby="headingIba5" data-bs-parent="#ibaFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                We support both models. If your bank or organization issues an official Purchase Order / Work Order under corporate contract, we facilitate direct institutional credit billing. If you are claiming personal reimbursement, we provide all stamped payment proofs so your claim is credited promptly to your salary account.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingIba6">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIba6" aria-expanded="false" aria-controls="collapseIba6">
                                <span class="service-faq-icon">
                                    <i class="bi bi-clock-history"></i>
                                </span>
                                <span class="service-faq-title">How early should bank officers book their transfer relocation?</span>
                            </button>
                        </h3>
                        <div id="collapseIba6" class="accordion-collapse collapse" aria-labelledby="headingIba6" data-bs-parent="#ibaFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                We recommend scheduling your pre-move survey as soon as your transfer order is announced (preferably 5 to 7 days in advance). This provides sufficient time to generate comparative estimates, obtain local branch clearance, and schedule dedicated container trucks.
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
                            <h6 class="fw-bold text-dark mb-1">Have questions about your bank transfer reimbursement?</h6>
                            <p class="text-muted small mb-0">Our institutional transfer coordinators assist bank and PSU officers 24/7.</p>
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
