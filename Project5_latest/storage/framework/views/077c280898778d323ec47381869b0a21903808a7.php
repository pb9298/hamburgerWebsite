<header id="header" class="indexHeader">
            <div class="navigation-bar">
                <div class="zigzag" id="navigation-container">
                <img alt="JBra's logo" class="logo" src="<?php echo e(URL::to('/')); ?>/images/logo.png"></img>
                    <ul>                        
                        <li><a class="hide">&#9776;</a>
                        <ul class="menu">
                            <li><a href="/index" id="active">INICIO</a> 
                            <a href="/aboutus">SOBRE NOSOTROS</a>
                                <a href="http://axp4419.uta.cloud/blog">BLOG</a>
                                <a href="/menu">MENU</a>
                                <?php if(auth()->guard()->guest()): ?>
                                <a href="/login" >NICIAR SESION</a>
                                <a href="<?php echo e(route('register')); ?>">REGISTRO</a>
                                <?php else: ?>
                                    <li><a href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>                                </li>
                            <?php endif; ?>
                                <a href="/contact-us">CONTACTO</a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                </div>

            </div>
            <div class="header_content">
                <p>LAS MEJORES DE LA CIUDAD<p>
                <h1><?php echo $__env->yieldContent('title'); ?></h1>
                <a href="<?php echo e(url('menu')); ?>"><button class="button1" type="button" href="<?php echo e(url('menu')); ?>">VER MENÚ HOY</button></a>
            </div>
        </header><?php /**PATH /Applications/MAMP/htdocs/Project5_latest/resources/views/layouts/header.blade.php ENDPATH**/ ?>