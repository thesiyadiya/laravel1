<div>
    <h2>Add New user</h2>

  <!-- <?php if($errors->any()): ?>
   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div style="color:red">
         <?php echo e($errors); ?>

  </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <?php endif; ?> -->
    <form action="adduser" method="post">
        <?php echo csrf_field(); ?>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter Username" name="username">
            <span style="color:red"><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter Useremail" name="email">
            <span style="color:red"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter Usercity" name="city">
            <span style="color:red"><?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
     <div class="input-wrapper">
        <h5>Skills</h5>
         <input type="checkbox" name="skill" value="PHP" id="php">
         <label for="php">PHP</label>

         <input type="checkbox" name="skill" value="Node" id="node">
         <label for="node">Node</label>

         <input type="checkbox" name="skill" value="Java" id="java">
         <label for="java">Java</label>
     </div>
     <span style="color:red"><?php $__errorArgs = ['skill'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
     <div class="input-wrapper">   
        <button>Add New User</button>
     </div>
    </form>
</div>
<style>
    input{
    border: orange 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;    color: orange;
}
.input-wrapper{
    margin:10px
}
button{
    border: orange 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;
    color: orange;
    background-color:#fff;
    cursor:pointer;
}
</style>
<?php /**PATH D:\xampp\htdocs\laravel\resources\views/user-form.blade.php ENDPATH**/ ?>