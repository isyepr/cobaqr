<!DOCTYPE html> 
<html> 
<head> 
    <title>QRCODE</title> 
</head> 
<body> 
    <table  width="100%"> 
    <tr> 
 
       <?php $__currentLoopData = $spas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
       <td align="center"  style="border: lpx solid #ccc"> 
        <?php echo e($p->name); ?>

       <div><?php echo QrCode::generate($p->qrcode);; ?></div>
      <?php echo e($p->qrcode); ?>

      </td>
     
     
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
   </tsble>
  </body>
</html><?php /**PATH C:\xampp\htdocs\cobaqr\resources\views/spa.blade.php ENDPATH**/ ?>