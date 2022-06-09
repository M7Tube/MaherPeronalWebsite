<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title-box-2">
                                <h5 class="title-left">
                                    <?php echo e(__('Send Message Us')); ?>

                                </h5>
                            </div>
                            <div>
                                <form wire:submit.prevent="sendMessage">
                                    <div class="results">
                                        <?php if($success): ?>
                                            <div class="alert alert-success">
                                                <?php echo e($success); ?>

                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" wire:model="name" class="form-control" id="name"
                                                    placeholder="<?php echo e(__('Your Name')); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="email" class="form-control" wire:model="email" id="email"
                                                    placeholder="<?php echo e(__('Your Email')); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" wire:model="subject"
                                                    id="subject" placeholder="<?php echo e(__('Subject')); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" wire:model="message" rows="5" placeholder="<?php echo e(__('Message')); ?>" required></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12 mt-2 text-center">
                                            <button type="submit" class="button button-a button-big button-rouded">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="title-box-2 pt-4 pt-md-0">
                                <h5 class="title-left">
                                    Get in Touch
                                </h5>
                            </div>
                            <div class="more-info">
                                <?php if(app()->getLocale() == 'ar'): ?>
                                    <p class="lead">
                                        <?php echo e($info->ar_contactWithUs_message); ?>

                                    </p>
                                <?php else: ?>
                                    <p class="lead">
                                        <?php echo e($info->en_contactWithUs_message); ?>

                                    </p>
                                <?php endif; ?>
                                <ul class="list-ico">
                                    <li><span class="bi bi-geo-alt"></span>
                                        <?php echo e($info->location); ?></li>
                                    <li><span class="bi bi-phone"></span><?php echo e($info->phone); ?></li>
                                    <li><span class="bi bi-envelope"></span><?php echo e($info->email); ?></li>
                                </ul>
                            </div>
                            <div class="socials">
                                <ul>
                                    <li><a href="<?php echo e($info->facebook); ?>"><span class="ico-circle"><i
                                                    class="bi bi-facebook"></i></span></a></li>
                                    <li><a href="<?php echo e($info->instagram); ?>"><span class="ico-circle"><i
                                                    class="bi bi-instagram"></i></span></a></li>
                                    <li><a href="<?php echo e($info->twitter); ?>"><span class="ico-circle"><i
                                                    class="bi bi-twitter"></i></span></a></li>
                                    <li><a href="<?php echo e($info->linkedIn); ?>"><span class="ico-circle"><i
                                                    class="bi bi-linkedin"></i></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/livewire/messages/send-message.blade.php ENDPATH**/ ?>