<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-lg p-5">
                <form wire:submit.prevent="subscribe">
                    <h4><?php echo e(__('Email Campaign')); ?></h4>
                    <div class="results">
                        <?php if($message): ?>
                            <div class="alert alert-success">
                                <?php echo e($message); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-floating mb-1">
                                <input class="form-control" id="email" type="text" wire:model="email"
                                    autocomplete="off" required/>
                                <span class="text-danger">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                                <label><?php echo e(__('Subscribe')); ?>

                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="h-100 w-100 btn btn-block btn-outline-success">
                                <?php echo e(__('Subscribe')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/livewire/newsletter-email.blade.php ENDPATH**/ ?>