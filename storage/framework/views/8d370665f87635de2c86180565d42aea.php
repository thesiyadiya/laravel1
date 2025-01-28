<!--<?php echo $__env->make('common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->

<?php if (isset($component)) { $__componentOriginal94cafefcfbb8f570ea4db79bd99d735b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b = $attributes; } ?>
<?php $component = App\View\Components\MessageBanner::resolve(['msg' => 'User Login Successsfully','class' => 'success'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('message-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MessageBanner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b)): ?>
<?php $attributes = $__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b; ?>
<?php unset($__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94cafefcfbb8f570ea4db79bd99d735b)): ?>
<?php $component = $__componentOriginal94cafefcfbb8f570ea4db79bd99d735b; ?>
<?php unset($__componentOriginal94cafefcfbb8f570ea4db79bd99d735b); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal94cafefcfbb8f570ea4db79bd99d735b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b = $attributes; } ?>
<?php $component = App\View\Components\MessageBanner::resolve(['msg' => 'User signup Successfully','class' => 'success'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('message-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MessageBanner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b)): ?>
<?php $attributes = $__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b; ?>
<?php unset($__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94cafefcfbb8f570ea4db79bd99d735b)): ?>
<?php $component = $__componentOriginal94cafefcfbb8f570ea4db79bd99d735b; ?>
<?php unset($__componentOriginal94cafefcfbb8f570ea4db79bd99d735b); ?>
<?php endif; ?>

<br>
<br>
<br>


<?php if (isset($component)) { $__componentOriginal94cafefcfbb8f570ea4db79bd99d735b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b = $attributes; } ?>
<?php $component = App\View\Components\MessageBanner::resolve(['msg' => 'Password not correct please try again','class' => 'error'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('message-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MessageBanner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b)): ?>
<?php $attributes = $__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b; ?>
<?php unset($__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94cafefcfbb8f570ea4db79bd99d735b)): ?>
<?php $component = $__componentOriginal94cafefcfbb8f570ea4db79bd99d735b; ?>
<?php unset($__componentOriginal94cafefcfbb8f570ea4db79bd99d735b); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal94cafefcfbb8f570ea4db79bd99d735b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b = $attributes; } ?>
<?php $component = App\View\Components\MessageBanner::resolve(['msg' => 'Password not correct please try again','class' => 'warning'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('message-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MessageBanner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b)): ?>
<?php $attributes = $__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b; ?>
<?php unset($__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94cafefcfbb8f570ea4db79bd99d735b)): ?>
<?php $component = $__componentOriginal94cafefcfbb8f570ea4db79bd99d735b; ?>
<?php unset($__componentOriginal94cafefcfbb8f570ea4db79bd99d735b); ?>
<?php endif; ?>

<h1>home page </h1>
<style>
    .success{
        background:lightgreen;
        color:green;
        padding:3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }

    .error{
        background:#ff000069;
        color:red;
        padding:3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }
    .warning{
        background:#ffa50073;
        color:orange;
        padding:3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }

</style>
<!--<?php echo $__env->make('common.inner',['page'=>"this is home page"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
<!--<!--<?php if ($__env->exists('common.common',['page'=>"this is home page"])) echo $__env->make('common.common',['page'=>"this is home page"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->--><?php /**PATH D:\xampp\htdocs\laravel\resources\views/home1.blade.php ENDPATH**/ ?>