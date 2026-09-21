<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// 1. About Us Section (Matching Screenshot 1)
$this->load->view('about_widget');

// 2. Standards & Trust Badges Section (Matching Screenshot 5)
$this->load->view('badge_widget');

// 3. Our Services Section (Matching Screenshot 2 - 8 Boxes in 2 Rows)
$this->load->view('service_widget');

// 4. Our 5-Step Process Section (Matching Screenshot 3)
$this->load->view('process_widget');

// 5. Testimonials Section (Matching Screenshot 4)
$this->load->view('review_widget');

// 6. FAQs Section (Accordion + 24/7 Helpline Box)
$this->load->view('faqs_widget');
