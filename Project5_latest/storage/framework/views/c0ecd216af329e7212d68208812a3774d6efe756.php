        <?php $__env->startSection('content'); ?>
            <div class="zig-zag-top">
            <!----------------------------------- Content 1: Nuestra historia --------------------------->
            <div id="content1" class="main_content_header">
                <img src="<?php echo e(URL::to('/')); ?>/images/Burguer.png" style=" width: 30px; height: 30px;">
                <h2>Nuestra historia</h2>
            </div>
            <div id="main_content_1">
                <div class="row">
                    <div class="columnImg"><img src="<?php echo e(URL::to('/')); ?>/images/story1.png" style="width: 140px; top: -40px;position: relative"></div>
                    <div class="columnTxt1">Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la Hamburgueseria “Soy Yo” con una  inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto.</div>
                    <div class="columnTxt2">A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill.</div>
                    <div class="columnImg"><img src="<?php echo e(URL::to('/')); ?>/images/story2.png" style="width: 140px; float: right;top: -40px;position: relative"></div>
                </div>
            </div></div>
            <!----------------------------------- Content 2: Las más vendidos --------------------------->
            <div id="content2" class="main_content_header">
                    <img src="<?php echo e(URL::to('/')); ?>/images/Burguer.png" style=" width: 30px; height: 30px;">
                    <h2>Las más vendidos</h2>
                <div id="main_content_2" class="grid-container">
				<?php $__currentLoopData = $lists1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div>
								<form method="post" action="menu.php" style="background-color:rgba(128, 110, 159, 0.17);">
									<img class="imgCSS1" src="<?php echo e($list1->image); ?>">
									<!--div class="bookmarkRibbon1"><span style="color:white;position: relative;text-align: center; font-size: smaller; top: -12px;">OFERTA</span></div-->
									<p><?php echo e($list1->item_name); ?></p>
									<p><b><font color="red"><?php echo e($list1->price); ?></font></b></p>
									<p><button class="button2" type="submit">Ordenar ahora</button></p>
								</form>
							</div><br><br>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <button class="button1" type="button">VER MENÚ HOY</button>
            </div>
            <!----------------------------------- Content 3: Nuestro menú --------------------------->
            <div class="zig-zag-top">
            <div id="content3" class="main_content_header">
                <img src="<?php echo e(URL::to('/')); ?>/images/Burguer.png" style=" width: 30px; height: 30px;">
                <h2>Nuestro menú</h2>
                        <div class="nav">
                            <ul>
                                <li class="TODOS"><a id="f1" onclick="openForm1()">TODOS</a></li>
                                <li class="Pollo"><a id="f2" onclick="openForm2()">Pollo</a></li>
                                <li class="Carne"><a  id="f3"onclick="openForm3()">Vegetariana</a></li>
                                <li class="Mixta"><a id="f4" onclick="openForm4()">Mixta</a></li>
                                <li class="De Todito"><a id="f5" onclick="openForm5()">Vegana</a></li>
                            </ul>
                        </div>
                <div class="large-12 columns">
					<div class="form-popup" id="form1">

						<table id ="block" class="albums">
						
							<tbody>
							<?php $__currentLoopData = $lists2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><img class="imgCSSTable" src="<?php echo e($list2->image); ?>"></td>
									<td class="tblText1"><?php echo e($list2->item_name); ?></td>
									<td class="tblText2"><?php echo e($list2->price); ?></td>
								
									<td><img class="imgCSSTable" src="<?php echo e($list2->image); ?>"></td>
									<td class="tblText1"><?php echo e($list2->item_name); ?></td>
									<td class="tblText2"><?php echo e($list2->price); ?></td>
								</tr>	
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
							</tbody>
							
						</table>

					</div>
				
					<div class="form-popup" id="form2">

						<table id ="block" class="albums">
							<tbody>
							<?php $__currentLoopData = $lists3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><img class="imgCSSTable" src="<?php echo e($list3->image); ?>"></td>
									<td class="tblText1"><?php echo e($list3->item_name); ?></td>
									<td class="tblText2"><?php echo e($list3->price); ?></td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>

					</div>

					<div class="form-popup" id="form3">
						<table id ="block" class="albums">
							<tbody>
							<?php $__currentLoopData = $lists4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><img class="imgCSSTable" src="<?php echo e($list4->image); ?>"></td>
									<td class="tblText1"><?php echo e($list4->item_name); ?></td>
									<td class="tblText2"><?php echo e($list4->price); ?></td>
						
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		   
							</tbody>
						</table>

					</div>

					<div class="form-popup" id="form4">

						<table id ="block" class="albums">
							<tbody>
							<?php $__currentLoopData = $lists5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><img class="imgCSSTable" src="<?php echo e($list5->image); ?>"></td>
									<td class="tblText1"><?php echo e($list5->item_name); ?></td>
									<td class="tblText2"><?php echo e($list5->price); ?></td>
								
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		   
							</tbody>
						</table>

					</div>

					<div class="form-popup" id="form5">

						<table id ="block" class="albums">
							<tbody>
							<?php $__currentLoopData = $lists6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list6): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><img class="imgCSSTable" src="<?php echo e($list6->image); ?>"></td>
									<td class="tblText1"><?php echo e($list6->item_name); ?></td>
									<td class="tblText2"><?php echo e($list6->price); ?></td>
								
									<td><img class="imgCSSTable" src="<?php echo e($list6->image); ?>"></td>
									<td class="tblText1"><?php echo e($list6->item_name); ?></td>
									<td class="tblText2"><?php echo e($list6->price); ?></td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		   
							</tbody>
						</table>

					</div>

				</div>
                <button class="button1" type="button">VER MENÚ HOY</button>
            </div></div>
			
			<script>
function openForm1() {
  document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";
  document.getElementById("form3").style.display = "none";
   document.getElementById("form4").style.display = "none";
   document.getElementById("form5").style.display = "none";
   document.getElementById("f1").element.classList.add("active");

}

function openForm2() {
  document.getElementById("form1").style.display = "none";
     document.getElementById("form2").style.display = "block";
  document.getElementById("form3").style.display = "none";
   document.getElementById("form4").style.display = "none";
   document.getElementById("form5").style.display = "none";
      document.getElementById("f2").element.classList.add("active");

}

function openForm3() {
  document.getElementById("form3").style.display = "block";
   document.getElementById("form1").style.display = "none";
   document.getElementById("form2").style.display = "none";
   document.getElementById("form4").style.display = "none";
   document.getElementById("form5").style.display = "none";
         document.getElementById("f3").element.classList.add("active");

}

function openForm4() {

  document.getElementById("form3").style.display = "none";
   document.getElementById("form1").style.display = "none";
   document.getElementById("form2").style.display = "none";
   document.getElementById("form4").style.display = "block";
   document.getElementById("form5").style.display = "none";
      document.getElementById("f4").element.classList.add("active");   
}

function openForm5() {

  document.getElementById("form3").style.display = "none";
   document.getElementById("form1").style.display = "none";
   document.getElementById("form2").style.display = "none";
   document.getElementById("form4").style.display = "none";
   document.getElementById("form5").style.display = "block";
      document.getElementById("f5").element.classList.add("active");   
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project5\resources\views/welcome.blade.php ENDPATH**/ ?>