<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Statistics')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.statistics.statistics')->html();
} elseif ($_instance->childHasBeenRendered('GOirfbj')) {
    $componentId = $_instance->getRenderedChildComponentId('GOirfbj');
    $componentTag = $_instance->getRenderedChildComponentTagName('GOirfbj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GOirfbj');
} else {
    $response = \Livewire\Livewire::mount('dashboard.statistics.statistics');
    $html = $response->html();
    $_instance->logRenderedChild('GOirfbj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Statistics/Statistics.blade.php ENDPATH**/ ?>