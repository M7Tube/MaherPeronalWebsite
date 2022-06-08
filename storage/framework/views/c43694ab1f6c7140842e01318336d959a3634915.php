<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Pdf')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.pdf.pdf')->html();
} elseif ($_instance->childHasBeenRendered('UTHAXZ4')) {
    $componentId = $_instance->getRenderedChildComponentId('UTHAXZ4');
    $componentTag = $_instance->getRenderedChildComponentTagName('UTHAXZ4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UTHAXZ4');
} else {
    $response = \Livewire\Livewire::mount('dashboard.pdf.pdf');
    $html = $response->html();
    $_instance->logRenderedChild('UTHAXZ4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Pdf/pdf.blade.php ENDPATH**/ ?>