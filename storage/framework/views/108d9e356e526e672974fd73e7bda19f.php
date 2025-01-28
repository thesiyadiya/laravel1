<?php echo $__env->make('common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1>home page </h1>
<?php echo $__env->make('common.inner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





<!--<?php if($name=='diya'): ?>
<h2>this is diya </h2>
<?php elseif($name=='thesiya'): ?>
<h2>this is thesiya</h2>
<?php else: ?>
<h2>other user</h2>
<?php endif; ?>

<div>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h5><?php echo e($user); ?></h5>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div>
    <?php for($i=0;$i<10;$i++): ?>
    <h3><?php echo e($i); ?></h3>
    <?php endfor; ?>
</div> --><?php /**PATH D:\xampp\htdocs\laravel\resources\views/home.blade.php ENDPATH**/ ?>