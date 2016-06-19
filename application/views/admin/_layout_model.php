<?php $this->load->view('admin/components/page_head'); ?>

<body style="background:#555">
	<div class="modal show" role="dialog">
    	<div class="modal-dialog">
    		<!-- Modal content-->
      		<div class="modal-content">
        		<div class="modal-body">
          			<?php $this->load->view($subview); ?>
        		</div>
        		<div class="modal-footer">
          			&copy; <?php echo date('Y') . $meta_title; ?>
        		</div>
      		</div>
      
    	</div>
  	</div>
<?php $this->load->view('admin/components/page_tail'); ?>

