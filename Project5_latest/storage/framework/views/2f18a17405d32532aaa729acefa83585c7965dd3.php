

<?php $__env->startSection('content'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!--********************** Main Content *************************** -->

    <!----------------------------------- Content 2: Las más vendidos --------------------------->

    <!----------------------------------- Content 3: Las más vendidos --------------------------->

    <div id="content3" class="main_content_header">
        <img src="images/Burguer.png" style=" width: 30px; height: 30px;">
        <h2>Bienvenido administrador</h2><p>Welcome </p>&nbsp;&nbsp;&nbsp;&nbsp;
        </br>
        <h2>Cambios en el menú</h2>

        <div id="main_content_1">
            <div class="large-12 columns">

            <form action = "/editMenu/<?php echo $menu[0]->item_no; ?>" method = "post">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            
                <table>
                    <tr>
                    <td>Item Name</td>
                    <td>
                        <input type = 'text' name = 'item_name' 
                            value = '<?php echo$menu[0]->item_name; ?>'/>
                    </td>
                    </tr>

                    <tr>
                    <td>Calories</td>
                    <td>
                        <input type = 'text' name = 'calories' 
                            value = '<?php echo$menu[0]->calories; ?>'/>
                    </td>
                    </tr>

                    <tr>
                    <td>Price</td>
                    <td>
                        <input type = 'text' name = 'price' 
                            value = '<?php echo$menu[0]->price; ?>'/>
                    </td>
                    </tr>

                    <tr>
                    <td colspan = '2'>
                        <input type = 'submit' value = "Edit Menu" />
                    </td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project5\resources\views/editMenu.blade.php ENDPATH**/ ?>