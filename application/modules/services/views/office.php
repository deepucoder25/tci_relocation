<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Office Relocation',
    'bc_desc' => "Zero-downtime commercial and corporate office relocation across India with antistatic IT packaging, server rack shifting, modular workstation reassembly, and weekend project execution.",
    'breadcrumbs' => [
        ['name' => 'Office Relocation']
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
                            <i class="bi bi-shield-check"></i> Zero-Downtime Commercial Logistics
                        </span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-monospace small">
                            <i class="bi bi-patch-check-fill text-warning me-1"></i> IBA Approved &bull; ISO Certified
                        </span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill small">
                            <i class="bi bi-clock-history me-1"></i> Weekend Turnkey Execution
                        </span>
                    </div>

                    <h2 class="fw-bold text-dark display-6 mb-3">
                        Professional Corporate &amp; Commercial Office Relocation
                    </h2>
                    
                    <p class="text-secondary lead fs-6 lh-lg mb-0" style="max-width: 1050px;">
                        Minimizing business interruption is the paramount priority during any commercial move. At <strong><?= $company3 ?></strong>, we execute turnkey office shifting over weekends and after-hours, ensuring your critical server stacks, confidential legal archives, executive workstations, and modular cubicles are systematically relocated so your workforce sits down on Monday morning with zero downtime.
                    </p>
                </div>

                <!-- 4 Core Technical Safeguards Grid across col-12 -->
                <div class="row g-3 g-lg-4 mb-4">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-pc-display-horizontal"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Antistatic IT Packing</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Pink ESD bubble wrap and custom-cut EPE foam cushions shielding delicate motherboards, CPUs, and monitors.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-qr-code-scan"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Color-Coded Barcodes</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Every department, desk, and employee crate is tagged with serialized barcode stickers matching the destination floor plan.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-server"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Server Rack Movers</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Air-suspension container vehicles and specialized server lifts ensuring vibration-free data center hardware transit.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-calendar-week"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Weekend Turnkey Shifts</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Packed on Friday evening, transported over Saturday, and completely reassembled on Sunday for Monday morning readiness.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Highlight Trust & Reassurance Bar with CTAs -->
                <div class="service-hero-cta-box p-4 rounded-4 border d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Zero Business Interruption</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Dedicated Move Project Manager</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Modular Cubicle Reassembly</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Comprehensive Corporate Cover</span>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" class="btn btn-warning py-2 px-4 fw-bold rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-briefcase me-1"></i> Request Corporate Proposal
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

<!-- 2. Commercial Spaces Handled -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-buildings"></i> Commercial Scope
            </span>
            <h2 class="fw-bold text-dark mb-3">Relocation Solutions for Modern Enterprises</h2>
            <p class="text-muted small mb-0">
                Whether relocating a 20-person startup hub or a 1,000-seat multi-storey corporate headquarters, we scale crews and logistics dynamically.
            </p>
        </div>

        <div class="row g-4">
            <!-- Category 1: Corporate Headquarters -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-building-fill-check"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Corporate Headquarters</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Multi-Departmental</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Large-scale phased relocations for HR, finance, marketing, and executive suites with dedicated departmental move coordinators.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Phased Transition Plans
                    </div>
                </div>
            </div>

            <!-- Category 2: IT/ITES & Data Centers -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-hdd-network-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">IT &amp; Tech Centers</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">High-Value Hardware</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Engineered de-racking, ESD packing, air-ride trucking, and re-racking of servers, network racks, and trading workstations.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Server De-Rack Protocol
                    </div>
                </div>
            </div>

            <!-- Category 3: Co-Working & Startups -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Startups &amp; Co-Working</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Rapid Scalability</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Agile, budget-optimized relocations for shared workstations, pantry equipment, collaborative pods, and event displays.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Same-Day Setup Available
                    </div>
                </div>
            </div>

            <!-- Category 4: Financial, Legal & Archives -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-folder-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Legal &amp; Financial Archives</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Chain-of-Custody</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Tamper-evident numbered crates for confidential client dossiers, compliance case files, audit records, and server backups.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Barcode Custody Sealing
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 3. Step-by-Step Corporate Protocol -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-diagram-3"></i> Corporate Protocol
            </span>
            <h2 class="fw-bold text-dark mb-3">Our 4-Stage Zero-Downtime Shifting Protocol</h2>
            <p class="text-muted small mb-0">
                A military-grade moving schedule engineered to have your enterprise fully functional before the opening bell on Monday.
            </p>
        </div>

        <div class="row g-4">
            <!-- Step 01 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">01</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-clipboard2-check"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Floor Plan Architecture</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Our project team maps your current workstations against the destination layout, assigning color codes and room numbers for seamless positioning.
                    </p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">02</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-tag"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">ESD Tagging &amp; Crating</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Desktop towers, monitors, and peripherals are wrapped in ESD antistatic film, tagged with employee names, and placed in modular security crates.
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
                        <h5 class="fw-bold text-dark mb-0 fs-6">After-Hours Transit</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Dispatched in sealed, air-suspension container trucks on Friday night or Saturday, keeping commercial traffic and public elevator disruptions to zero.
                    </p>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">04</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-check-all"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Monday Go-Live Setup</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        On Sunday, technicians reassemble cubicles, position monitors, connect cable harnesses, and clear all packaging so staff can sit and work instantly.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 4. Preparation Checklist & Site Tips -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-check2-square"></i> Move Readiness
            </span>
            <h2 class="fw-bold text-dark mb-3">Corporate Shifting Admin Checklist</h2>
            <p class="text-muted small mb-0">
                Key coordination tasks to complete with your internal IT and building facilities teams before moving day.
            </p>
        </div>

        <div class="row g-4">
            <!-- Col 1: IT Department Checklist -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-warning-subtle text-warning-emphasis rounded-3">
                            <i class="bi bi-cpu-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">IT Infrastructure Readiness</h5>
                            <span class="text-muted small">Server backups &amp; IT hardware shutdown checklist</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-cloud-arrow-up-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Complete Cloud &amp; Offsite Data Backup</strong>
                                <span class="text-muted small">Execute full server snapshots and redundant cloud backups prior to hardware de-racking.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-terminal-split text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">IP Phone &amp; Peripheral Inventory</strong>
                                <span class="text-muted small">Ensure employee headsets, laptop power adapters, and wireless dongles are labeled in individual pouches.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-router-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">ISP &amp; Leased Line Cutover Activation</strong>
                                <span class="text-muted small">Verify internet leased lines and firewall connections are tested and operational at the new premises.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Col 2: Admin & Facilities Checklist -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-primary-subtle text-primary rounded-3">
                            <i class="bi bi-building-gear fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Facilities &amp; Building Clearances</h5>
                            <span class="text-muted small">Gate pass approvals &amp; corporate building protocol</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-pass-fill text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Building Gate Passes &amp; Loading Bay Booking</strong>
                                <span class="text-muted small">Secure formal material exit and entry permits from property management at both origin and destination.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-person-workspace text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Employee Personal Item Clearance</strong>
                                <span class="text-muted small">Instruct staff to take personal wallets, mugs, and confidential personal desk contents home on Friday.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-shield-lock-fill text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Access Card &amp; Biometric Cutover</strong>
                                <span class="text-muted small">Program turnstiles and security access cards for new site entries before Monday 8:00 AM.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 5. Specialized Office Shifting FAQs -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-patch-question"></i> Clarifications &amp; Queries
            </span>
            <h2 class="fw-bold text-dark mb-3">Frequently Asked Questions on Office Shifting</h2>
            <p class="text-muted small mb-0">
                Key questions on commercial downtime, IT hardware handling, modular workstations, and confidentiality protocols.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-10">
                <div class="accordion service-faq-accordion" id="officeFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingOff1">
                            <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOff1" aria-expanded="true" aria-controls="collapseOff1">
                                <span class="service-faq-icon">
                                    <i class="bi bi-clock-history"></i>
                                </span>
                                <span class="service-faq-title">How do you guarantee zero downtime for our business during the move?</span>
                            </button>
                        </h3>
                        <div id="collapseOff1" class="accordion-collapse collapse show" aria-labelledby="headingOff1" data-bs-parent="#officeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                We operate on a customized weekend and overnight shifting timetable. Our packing crews begin packing on Friday at close-of-business (6:00 PM), transport throughout Saturday, and reassemble modular cubicles and IT systems on Sunday. By Monday morning 8:30 AM, workstations are clean, connected, and fully functional.
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>Business operations continue without a single hour of billable employee downtime.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingOff2">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOff2" aria-expanded="false" aria-controls="collapseOff2">
                                <span class="service-faq-icon">
                                    <i class="bi bi-server"></i>
                                </span>
                                <span class="service-faq-title">How are server racks, switches, and sensitive data center hardware handled?</span>
                            </button>
                        </h3>
                        <div id="collapseOff2" class="accordion-collapse collapse" aria-labelledby="headingOff2" data-bs-parent="#officeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Our technicians collaborate directly with your internal IT team. We pack server blades in specialized ESD antistatic foam crates and move whole rack enclosures using shock-absorbing hydraulic stair climbers and air-ride container trucks to eliminate highway vibrational resonance.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingOff3">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOff3" aria-expanded="false" aria-controls="collapseOff3">
                                <span class="service-faq-icon">
                                    <i class="bi bi-tools"></i>
                                </span>
                                <span class="service-faq-title">Do you dismantle and reassemble modular cubicles and conference tables?</span>
                            </button>
                        </h3>
                        <div id="collapseOff3" class="accordion-collapse collapse" aria-labelledby="headingOff3" data-bs-parent="#officeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. Our commercial carpenters specialize in modular furniture systems from leading manufacturers (Godrej, Featherlite, Herman Miller, Steelcase). We systematically dismantle partition screens, raceways, and boardroom tables, bagging all hardware fasteners with individual station IDs, and reassemble them to match the new CAD floor plan.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingOff4">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOff4" aria-expanded="false" aria-controls="collapseOff4">
                                <span class="service-faq-icon">
                                    <i class="bi bi-shield-lock-fill"></i>
                                </span>
                                <span class="service-faq-title">How do you protect confidential financial and legal files during transit?</span>
                            </button>
                        </h3>
                        <div id="collapseOff4" class="accordion-collapse collapse" aria-labelledby="headingOff4" data-bs-parent="#officeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Confidential files, audits, and legal agreements are packed into heavy-duty plastic security crates and sealed with serialized, tamper-evident security pull-ties. The serial numbers are recorded on a chain-of-custody sheet signed by your compliance lead before and after transit.
                                <div class="service-faq-tip">
                                    <i class="bi bi-patch-check-fill text-success"></i> <span>Zero document loss guarantee backed by strict chain-of-custody logs.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingOff5">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOff5" aria-expanded="false" aria-controls="collapseOff5">
                                <span class="service-faq-icon">
                                    <i class="bi bi-cash-stack"></i>
                                </span>
                                <span class="service-faq-title">What billing and payment terms do you offer corporate clients?</span>
                            </button>
                        </h3>
                        <div id="collapseOff5" class="accordion-collapse collapse" aria-labelledby="headingOff5" data-bs-parent="#officeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                We support standard corporate vendor terms, including formal Purchase Order (PO) processing, milestone-based payments, and 15–30 day credit cycles for verified enterprise accounts with complete GST tax invoicing.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingOff6">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOff6" aria-expanded="false" aria-controls="collapseOff6">
                                <span class="service-faq-icon">
                                    <i class="bi bi-trash3"></i>
                                </span>
                                <span class="service-faq-title">Can you assist with e-waste recycling and surplus furniture disposal?</span>
                            </button>
                        </h3>
                        <div id="collapseOff6" class="accordion-collapse collapse" aria-labelledby="headingOff6" data-bs-parent="#officeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. As part of our commercial decommissioning service, we partner with government-certified e-waste recyclers to legally recycle outdated CRT/LCD monitors, old wiring, and decommissioned servers, providing an authorized green certificate of destruction for your corporate records.
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
                            <h6 class="fw-bold text-dark mb-1">Planning an office move or corporate facility transition?</h6>
                            <p class="text-muted small mb-0">Our corporate move project directors are available 24/7 for consultation.</p>
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