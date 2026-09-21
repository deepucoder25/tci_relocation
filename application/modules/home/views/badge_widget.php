<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Standards & Trust Badges Section - Using Custom Gold Badges
     ========================================================================== -->
<section class="home-standards-section" id="standards">
  <div class="container">
    
    <!-- Unified Section Heading (Normal Centered) -->
    <div class="home-section-header text-center mb-5">
      <!-- Side Decorative Dot Grids -->
      <div class="heading-dots-decor decor-left d-none d-lg-block" aria-hidden="true"></div>
      <div class="heading-dots-decor decor-right d-none d-lg-block" aria-hidden="true"></div>

      <!-- Subtitle with Orange Diamond Dashes -->
      <div class="section-subtitle-wrap d-inline-flex align-items-center gap-2">
        <span class="heading-dash"></span>
        <span class="section-subtitle">OUR STANDARDS</span>
        <span class="heading-dash"></span>
      </div>

      <!-- Mini Speed Delivery Truck Icon -->
      <div class="heading-truck-icon">
        <svg width="46" height="20" viewBox="0 0 46 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 5.5H11" stroke="var(--secondary-color, #fec503)" stroke-width="2" stroke-linecap="round"/>
          <path d="M0 10H8" stroke="var(--secondary-color, #fec503)" stroke-width="2" stroke-linecap="round"/>
          <path d="M3 14.5H12" stroke="var(--secondary-color, #fec503)" stroke-width="2" stroke-linecap="round"/>
          <path d="M14 3H29V15H14V3Z" stroke="var(--primary-color, #141f27)" stroke-width="1.8" stroke-linejoin="round"/>
          <path d="M29 7H35L38.5 11V15H29V7Z" stroke="var(--primary-color, #141f27)" stroke-width="1.8" stroke-linejoin="round"/>
          <circle cx="19" cy="16" r="2.4" fill="#ffffff" stroke="var(--primary-color, #141f27)" stroke-width="1.8"/>
          <circle cx="34" cy="16" r="2.4" fill="#ffffff" stroke="var(--primary-color, #141f27)" stroke-width="1.8"/>
        </svg>
      </div>

      <!-- Main Section Title -->
      <h2 class="section-title">
        QUALITY IN <span class="section-title-highlight">EVERY MOVE</span>
      </h2>

      <!-- 3-Dot Divider Line with Left & Right Gradient Lines -->
      <div class="section-heading-divider d-inline-flex align-items-center gap-2 my-2">
        <span class="heading-divider-line line-left"></span>
        <span class="dot dot-navy"></span>
        <span class="dot dot-orange"></span>
        <span class="dot dot-orange"></span>
        <span class="heading-divider-line line-right"></span>
      </div>

      <p class="section-desc mb-0 mx-auto">
        We maintain the highest standards to deliver a reliable and hassle-free moving experience for every customer.
      </p>
    </div>

    <!-- 6 Golden Laurel Wreath Badges Down Below -->
    <div class="row g-4 row-cols-2 row-cols-sm-3 row-cols-lg-6 justify-content-center">
      
      <!-- Badge 1: Award Winning Service -->
      <div class="col">
        <div class="standards-badge-item">
          <div class="standards-badge-img-wrap">
            <img src="<?= base_url('assets/img/award_winning.png') ?>" 
                 alt="Award Winning Service" 
                 class="img-fluid standards-badge-img" 
                 loading="lazy">
          </div>
        </div>
      </div>

      <!-- Badge 2: Premium Packing Materials -->
      <div class="col">
        <div class="standards-badge-item">
          <div class="standards-badge-img-wrap">
            <img src="<?= base_url('assets/img/premium_packing.png') ?>" 
                 alt="Premium Packing Materials" 
                 class="img-fluid standards-badge-img" 
                 loading="lazy">
          </div>
        </div>
      </div>

      <!-- Badge 3: Customer Satisfaction -->
      <div class="col">
        <div class="standards-badge-item">
          <div class="standards-badge-img-wrap">
            <img src="<?= base_url('assets/img/customer_satisfaction.png') ?>" 
                 alt="Customer Satisfaction" 
                 class="img-fluid standards-badge-img" 
                 loading="lazy">
          </div>
        </div>
      </div>

      <!-- Badge 4: Skilled & Trained Staff -->
      <div class="col">
        <div class="standards-badge-item">
          <div class="standards-badge-img-wrap">
            <img src="<?= base_url('assets/img/skilled_trained_staff.png') ?>" 
                 alt="Skilled & Trained Staff" 
                 class="img-fluid standards-badge-img" 
                 loading="lazy">
          </div>
        </div>
      </div>

      <!-- Badge 5: Modern Transport Fleet -->
      <div class="col">
        <div class="standards-badge-item">
          <div class="standards-badge-img-wrap">
            <img src="<?= base_url('assets/img/modern_transport.png') ?>" 
                 alt="Modern Transport Fleet" 
                 class="img-fluid standards-badge-img" 
                 loading="lazy">
          </div>
        </div>
      </div>

      <!-- Badge 6: Trusted by Thousands -->
      <div class="col">
        <div class="standards-badge-item">
          <div class="standards-badge-img-wrap">
            <img src="<?= base_url('assets/img/trusted_by_thousands.png') ?>" 
                 alt="Trusted by Thousands" 
                 class="img-fluid standards-badge-img" 
                 loading="lazy">
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
