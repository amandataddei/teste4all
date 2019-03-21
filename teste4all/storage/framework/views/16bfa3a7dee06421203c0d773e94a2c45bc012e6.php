<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script> 
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> 


  <script> 


  <?php if(Session::has('success')): ?> 
  toastr.success("<?php echo e(Session::get('success')); ?>"); 
  <?php endif; ?> 


  </script> 