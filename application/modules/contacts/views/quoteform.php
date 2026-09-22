  <div class="hero-quote-card-container" itemscope itemtype="https://schema.org/QuoteAction">
            <!-- Card Header -->
            <div class="hero-quote-header">
              <h2 class="hero-quote-title" itemprop="name">Get Your Best Moving Quote</h2>
              <p class="hero-quote-subtitle" itemprop="description">Quick, Fast & Free Estimates</p>
            </div>
            
            <div class="hero-quote-white-card">
              <!-- Card Body / Form -->
              <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
                
                <div class="row g-2 g-sm-3">
                  <!-- Name Input -->
                  <div class="col-12 col-sm-6">
                    <div class="form-floating quote-form-floating">
                      <input type="text" class="form-control" id="heroName" name="name" placeholder=" " required>
                      <label for="heroName"><i class="bi bi-person"></i> Full Name *</label>
                    </div>
                  </div>
                  
                  <!-- Phone Input -->
                  <div class="col-12 col-sm-6">
                    <div class="form-floating quote-form-floating">
                      <input type="tel" class="form-control" id="heroPhone" name="phone" placeholder=" " required>
                      <label for="heroPhone"><i class="bi bi-telephone"></i> Mobile Number *</label>
                    </div>
                  </div>
                  
                  <!-- Email Input -->
                  <div class="col-12 col-sm-6">
                    <div class="form-floating quote-form-floating">
                      <input type="email" class="form-control" id="heroEmail" name="email" placeholder=" ">
                      <label for="heroEmail"><i class="bi bi-envelope"></i> Email Address</label>
                    </div>
                  </div>
                  
                  <!-- Select Service -->
                  <div class="col-12 col-sm-6">
                    <div class="form-floating quote-form-floating">
                      <select class="form-select" id="heroService" name="mtype" aria-label="Select Service">
                        <option value="" disabled selected hidden></option>
                        <option value="Household Shifting">Household Shifting</option>
                        <option value="Office Relocation">Office Relocation</option>
                        <option value="Car Transportation">Car Transportation</option>
                        <option value="Bike Transportation">Bike Transportation</option>
                        <option value="Packing &amp; Moving">Packing &amp; Moving</option>
                        <option value="Loading &amp; Unloading">Loading &amp; Unloading</option>
                        <option value="Warehousing &amp; Storage">Warehousing &amp; Storage</option>
                        <option value="IBA Approved Movers">IBA Approved Movers</option>
                      </select>
                      <label for="heroService"><i class="bi bi-truck"></i> Select Service</label>
                    </div>
                  </div>
                  
                  <!-- Moving From -->
                  <div class="col-6">
                    <div class="form-floating quote-form-floating">
                      <input type="text" class="form-control" id="heroFrom" name="mfrom" value="<?= @$city ?>" placeholder=" " required>
                      <label for="heroFrom"><i class="bi bi-geo-alt"></i> Moving From *</label>
                    </div>
                  </div>
                  
                  <!-- Moving To -->
                  <div class="col-6">
                    <div class="form-floating quote-form-floating">
                      <input type="text" class="form-control" id="heroTo" name="mto" placeholder=" " required>
                      <label for="heroTo"><i class="bi bi-geo"></i> Moving To *</label>
                    </div>
                  </div>
                  
                  <!-- Submit Button -->
                  <div class="col-12">
                    <button type="submit" class="btn-submit-custom w-100">
                      <i class="bi bi-send d-none d-sm-inline"></i>
                      <i class="bi bi-file-earmark-text d-inline d-sm-none"></i>
                      <span>Get Quote</span>
                    </button>
                  </div>
                </div>
                
                <div id="quoteformresults"></div>
              </form>
              
              <!-- Security Tag (Card Footer) -->
              <div class="mobile-security-tag d-flex justify-content-center align-items-center gap-2 py-3 mt-3">
                <i class="bi bi-shield-check text-success fs-6"></i>
                <span>100% Secure. We never share your data.</span>
              </div>
            </div>

          </div>