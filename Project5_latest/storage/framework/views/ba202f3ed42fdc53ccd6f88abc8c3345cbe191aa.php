<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site <?php echo e($user['first_name']); ?></h2>
<br/>
Your registered user-id is <?php echo e($user['user_id']); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\Project5\resources\views/emails/welcomemail.blade.php ENDPATH**/ ?>