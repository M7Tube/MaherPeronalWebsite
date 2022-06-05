<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Newsletter Emails')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.newsletter-emails.newsletter-emails')->html();
} elseif ($_instance->childHasBeenRendered('IpUTCxc')) {
    $componentId = $_instance->getRenderedChildComponentId('IpUTCxc');
    $componentTag = $_instance->getRenderedChildComponentTagName('IpUTCxc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IpUTCxc');
} else {
    $response = \Livewire\Livewire::mount('dashboard.newsletter-emails.newsletter-emails');
    $html = $response->html();
    $_instance->logRenderedChild('IpUTCxc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/NewsletterEmails/NewsletterEmails.blade.php ENDPATH**/ ?>