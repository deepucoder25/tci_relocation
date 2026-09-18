<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered quote-modal-dialog" role="document">
        <div class="modal-content quote-modal-content border-0 shadow-lg overflow-hidden">
            <!-- Modal Header -->
            <div class="modal-header quote-modal-header border-0 px-4 pt-4 pb-2 d-flex justify-content-between align-items-start">
                <div>
                    <div class="quote-modal-pill mb-2">
                        <i class="bi bi-lightning-charge-fill me-1"></i> Quick &amp; 100% Free Estimate
                    </div>
                    <h4 class="modal-title fw-bold text-dark mb-1" id="qteModalLabel">
                        Get a Free Moving Quote
                    </h4>
                    <p class="text-muted small mb-0">Transparent pricing &amp; verified IBA approved movers</p>
                </div>
                <button type="button" class="btn-close quote-modal-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body px-4 py-3">
                <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                    <div class="row g-3">
                        
                        <!-- Full Name Floating Label -->
                        <div class="col-md-6">
                            <div class="form-floating quote-form-floating">
                                <input type="text" class="form-control" id="qName" name="name" placeholder=" " required>
                                <label for="qName"><i class="bi bi-person"></i> Full Name *</label>
                            </div>
                        </div>

                        <!-- Mobile Number Floating Label -->
                        <div class="col-md-6">
                            <div class="form-floating quote-form-floating">
                                <input type="tel" class="form-control" id="qPhone" name="phone" placeholder=" " required>
                                <label for="qPhone"><i class="bi bi-telephone"></i> Mobile Number *</label>
                            </div>
                        </div>

                        <!-- Email Address Floating Label -->
                        <div class="col-12">
                            <div class="form-floating quote-form-floating">
                                <input type="email" class="form-control" id="qEmail" name="email" placeholder=" ">
                                <label for="qEmail"><i class="bi bi-envelope"></i> Email Address (Optional)</label>
                            </div>
                        </div>

                        <!-- Moving From Floating Label -->
                        <div class="col-6">
                            <div class="form-floating quote-form-floating">
                                <input type="text" class="form-control" id="qFrom" name="mfrom" placeholder=" " required>
                                <label for="qFrom"><i class="bi bi-geo-alt"></i> Moving From *</label>
                            </div>
                        </div>

                        <!-- Moving To Floating Label -->
                        <div class="col-6">
                            <div class="form-floating quote-form-floating">
                                <input type="text" class="form-control" id="qTo" name="mto" placeholder=" " required>
                                <label for="qTo"><i class="bi bi-geo"></i> Moving To *</label>
                            </div>
                        </div>

                        <!-- Relocation Details Floating Textarea -->
                        <div class="col-12">
                            <div class="form-floating quote-form-floating">
                                <textarea class="form-control" id="qMessage" name="message" placeholder=" "></textarea>
                                <label for="qMessage"><i class="bi bi-chat-left-text"></i> Relocation Details (Items, Shifting Date, etc.)</label>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons: Submit & Clear -->
                    <div class="d-flex quote-modal-actions gap-2 mt-4">
                        <button id="submitbquotemodal" type="submit" class="btn btn-quote-cta flex-grow-1 py-3 text-center border-0 shadow">
                            <span>Get My Free Quote</span>
                            <span class="btn-cta-arrow ms-2"><i class="bi bi-arrow-right"></i></span>
                        </button>
                        <button type="reset" class="btn btn-quote-clear py-3 px-4 text-center" onclick="document.getElementById('resultquotemodal').innerHTML = '';">
                            <i class="bi bi-arrow-counterclockwise me-1"></i> Clear
                        </button>
                    </div>

                    <div id="resultquotemodal" class="mt-2 text-center"></div>
                </form>
            </div>
            
            <!-- Modal Footer Trust Highlights -->
            <div class="modal-footer quote-modal-footer border-0 py-2 px-4 d-flex justify-content-between flex-wrap">
                <span class="small text-muted d-inline-flex align-items-center gap-1">
                    <i class="bi bi-shield-check text-success"></i> 100% Privacy Protected
                </span>
                <span class="small text-muted d-inline-flex align-items-center gap-1">
                    <i class="bi bi-patch-check-fill text-warning"></i> IBA Approved &amp; ISO Certified
                </span>
            </div>
        </div>
    </div>
</div>