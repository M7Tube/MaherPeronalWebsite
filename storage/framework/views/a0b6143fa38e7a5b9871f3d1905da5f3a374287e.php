<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Settings')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.setttings.settings')->html();
} elseif ($_instance->childHasBeenRendered('cFmOHWl')) {
    $componentId = $_instance->getRenderedChildComponentId('cFmOHWl');
    $componentTag = $_instance->getRenderedChildComponentTagName('cFmOHWl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cFmOHWl');
} else {
    $response = \Livewire\Livewire::mount('dashboard.setttings.settings');
    $html = $response->html();
    $_instance->logRenderedChild('cFmOHWl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Settings/Settings.blade.php ENDPATH**/ ?>