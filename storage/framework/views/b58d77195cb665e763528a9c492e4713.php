<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="d-flex align-items-center">
            <div class="logo">
                <a href="<?php echo e(route('landing-page')); ?>"><img src="<?php echo e(asset('assets/img/logo-mbah-jiwo.png')); ?>" alt="" class="img-fluid"></a>
            </div>
            <div class="ms-4 mt-2">
                <h2><b>Mbah Jiwo</b></h2>
            </div>
        </div>
    
        
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="<?php echo e(route('landing-page')); ?>">Home</a></li>
                <?php if(auth()->guard()->check()): ?>
                <li><a class="nav-link scrollto" href="<?php echo e(route('inventory')); ?>">Inventory</a></li>
                <li><a class="nav-link scrollto" href="<?php echo e(route('finance')); ?>">Finance</a></li>
                <?php endif; ?>
                <li><a class="nav-link scrollto" href="<?php echo e(route('contact-us')); ?>">Contact Us</a></li>
                <?php if(auth()->guard()->check()): ?>
                <li class="dropdown">
                    <a class="nav-link scrollto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo e(auth()->user()->name); ?> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                <li><a class="getstarted scrollto" href="<?php echo e(route('login')); ?>">Login</a></li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    
    </div>
    
</header>
<?php /**PATH D:\RACHMA GUTHUB\mbah-jiwo\resources\views/partials/navbar.blade.php ENDPATH**/ ?>