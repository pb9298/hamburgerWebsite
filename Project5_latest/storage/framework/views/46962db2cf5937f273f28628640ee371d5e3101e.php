

<?php $__env->startSection('title', 'Menu'); ?>

<?php $__env->startSection('content'); ?>
<main id="main_content">
            <div class="zig-zag-top">

            <div id="content2" class="main_content_header" style="background-image: none">
<p>Welcome User</p>
	<a></a>&nbsp;&nbsp;&nbsp;&nbsp;<a></a>
                <h2>Elija su Hamburguesa</h2>
					<div id="main_content_2" class="grid-container">
								<!-- View Cart Box Start -->

<!-- View Cart Box End -->
					
						
						
							<div>
                            <?php $__currentLoopData = $lists1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<form method="post" action="cart_update.php" style="background-color:rgba(128, 110, 159, 0.17);">
                                
									<img class="imgCSS1" src='<?php echo e($list1->image); ?>'>
									<!--div class="bookmarkRibbon1"><span style="color:white;position: relative;text-align: center; font-size: smaller; top: -12px;">OFERTA</span></div-->
									<p><?php echo e($list1->item_name); ?></p>
									<p><?php echo e($list1->category); ?></p>
									<p><?php echo e($list1->calories); ?></p>
									<p><b><font color="red"><?php echo e($list1->price); ?></font></b></p>
										<label>
											<span>Quantity</span>
											<input type="text" size="2" maxlength="2" name="item_qty" value="1" />
										</label>
									<input type="hidden" name="item_no" value="" />
									<input type="hidden" name="type" value="add" />
									<input type="hidden" name="return_url" value="" />
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<div align="center"><button type="submit" class="add_to_cart buttonCart">Add</button></div>
								</form>
							</div><br><br>
					
					</div>						               
				</div>
            </div>
       
        </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project5\resources\views/menu.blade.php ENDPATH**/ ?>