<div>
    <div class="hero hero-single route bg-image" style="background-image: url(<?php echo e(asset('/img/overlay-bg.jpg')); ?>">
        <div class="overlay-mf"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <?php if(app()->getLocale() == 'ar'): ?>
                        <h2 class="hero-title mb-4"><?php echo e($item->ar_name); ?></h2>
                    <?php else: ?>
                        <h2 class="hero-title mb-4"><?php echo e($item->en_name); ?></h2>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>

    <main id="main">

        <!-- ======= Blog Single Section ======= -->
        <section class="blog-wrapper sect-pt4" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="post-box">
                            <div class="post-thumb">
                                <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $item->picture)); ?>"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="post-meta">
                                <?php if(app()->getLocale() == 'ar'): ?>
                                    <h1 class="article-title"><?php echo e($item->ar_name); ?></h1>
                                <?php else: ?>
                                    <h1 class="article-title"><?php echo e($item->en_name); ?></h1>
                                <?php endif; ?>
                                <ul>
                                    <li>
                                        <span class="bi bi-person"></span>
                                        <a href="#"><?php echo e($item->user->name); ?></a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="article-content">
                                <?php if(app()->getLocale() == 'ar'): ?>
                                    <p>
                                        <?php echo e($item->ar_desc); ?>

                                    </p>
                                <?php else: ?>
                                    <p>
                                        <?php echo e($item->en_desc); ?>

                                    </p>
                                <?php endif; ?>

                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="widget-sidebar sidebar-search">
                            <h5 class="sidebar-title">Search</h5>
                            <div class="sidebar-content">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for..."
                                            aria-label="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary btn-search" type="button">
                                                <span class="bi bi-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/livewire/items/show-item.blade.php ENDPATH**/ ?>