<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('lang.Dashboard')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.dashboard')->html();
} elseif ($_instance->childHasBeenRendered('h4RhxyR')) {
    $componentId = $_instance->getRenderedChildComponentId('h4RhxyR');
    $componentTag = $_instance->getRenderedChildComponentTagName('h4RhxyR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('h4RhxyR');
} else {
    $response = \Livewire\Livewire::mount('dashboard.dashboard');
    $html = $response->html();
    $_instance->logRenderedChild('h4RhxyR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/dashboard.blade.php ENDPATH**/ ?>