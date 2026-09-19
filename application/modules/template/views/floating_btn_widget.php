<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Floating Dual Action Buttons (WhatsApp on Left & Call on Right with Smooth Animation)
     ========================================================================== -->

<div class="floating-actions-container" aria-label="Quick Connect Actions">
  
  <!-- Left Side: WhatsApp Button -->
  <div class="floating-btn-wrapper floating-btn-left position-fixed">
    <a href="<?= @$whatsapphtml ?>" 
       target="_blank" 
       rel="noopener noreferrer" 
       class="floating-action-btn floating-btn-whatsapp position-relative d-flex align-items-center justify-content-center rounded-circle text-decoration-none" 
       aria-label="Chat on WhatsApp">
      <!-- Smooth Soft Pulse Ring -->
      <span class="floating-soft-pulse pulse-wa position-absolute top-0 start-0 w-100 h-100 rounded-circle pe-none"></span>
      <!-- WhatsApp Icon with Smooth Breathing -->
      <i class="bi bi-whatsapp floating-icon wa-smooth-anim position-relative lh-1"></i>
      <!-- Interactive Tooltip Pill -->
      <span class="floating-tooltip-pill tooltip-left position-absolute top-50 rounded-pill text-nowrap pe-none d-none d-md-inline-flex align-items-center">
        <i class="bi bi-chat-dots-fill me-1"></i> Chat on WhatsApp
      </span>
    </a>
  </div>

  <!-- Right Side: Call Now Button -->
  <div class="floating-btn-wrapper floating-btn-right position-fixed">
    <a <?= @$phonehtml ?> class="floating-action-btn floating-btn-call position-relative d-flex align-items-center justify-content-center rounded-circle text-decoration-none" 
       aria-label="Call Relocation Helpline">
      <!-- Smooth Soft Pulse Ring -->
      <span class="floating-soft-pulse pulse-call position-absolute top-0 start-0 w-100 h-100 rounded-circle pe-none"></span>
      <!-- Phone Icon with Smooth Sway -->
      <i class="bi bi-telephone-fill floating-icon call-smooth-anim position-relative lh-1"></i>
      <!-- Interactive Tooltip Pill -->
      <span class="floating-tooltip-pill tooltip-right position-absolute top-50 rounded-pill text-nowrap pe-none d-none d-md-inline-flex align-items-center">
        <i class="bi bi-headset me-1"></i> Call: <?= @$phone ?>
      </span>
    </a>
  </div>

</div>
