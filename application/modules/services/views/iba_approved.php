<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'IBA Approved Movers',
    'bc_desc' => 'Government Bank Recognized & IBA Approved Relocation Services',
    'breadcrumbs' => [
        ['name' => 'IBA Approved Movers']
    ]
]);
?>
