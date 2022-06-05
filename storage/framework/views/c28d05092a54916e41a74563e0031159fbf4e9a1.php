<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Edit Newsletter Emails')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.newsletter-emails.edit-newsletter-emails')->html();
} elseif ($_instance->childHasBeenRendered('1S513fu')) {
    $componentId = $_instance->getRenderedChildComponentId('1S513fu');
    $componentTag = $_instance->getRenderedChildComponentTagName('1S513fu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1S513fu');
} else {
    $response = \Livewire\Livewire::mount('dashboard.newsletter-emails.edit-newsletter-emails');
    $html = $response->html();
    $_instance->logRenderedChild('1S513fu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/NewsletterEmails/EditNewsletterEmails.blade.php ENDPATH**/ ?>