<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

<?php if($errors->has('email') || $errors->has('password')): ?>
    <script>
    $(function() {
        $('#loginModal').modal({
            show: true
        });
    });
    </script>
<?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\Project5\resources\views/partials/login.blade.php ENDPATH**/ ?>