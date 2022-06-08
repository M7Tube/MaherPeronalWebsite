<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Edit Pdf')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.pdf.edit-pdf')->html();
} elseif ($_instance->childHasBeenRendered('XHAV24m')) {
    $componentId = $_instance->getRenderedChildComponentId('XHAV24m');
    $componentTag = $_instance->getRenderedChildComponentTagName('XHAV24m');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XHAV24m');
} else {
    $response = \Livewire\Livewire::mount('dashboard.pdf.edit-pdf');
    $html = $response->html();
    $_instance->logRenderedChild('XHAV24m', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Pdf/EditPdf.blade.php ENDPATH**/ ?>