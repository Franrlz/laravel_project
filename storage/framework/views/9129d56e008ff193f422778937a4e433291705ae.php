<!Doctype html>
<html>
<head>
<title>View Student Records</title>
<!-- library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<!-- library bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<br>
<br>
    <div class="container">
        <?php if(Session::has('message')): ?>
            <div class="alert-success text-center" id="res_message">
                <?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
            <script>
            $(document).ready(function(){
                setTimeout(function() {
                    $('#res_message').hide();
                    },3000);
                });
                </script>
        <?php if(Session::has('delete')): ?>
            <div class="alert-success text-center" id="res_message">
                <?php echo e(Session::get('delete')); ?>

            </div>
        <?php endif; ?>
            <script>
                $(document).ready(function(){
                setTimeout(function() {
                    $('#res_message').hide();
                    },3000);
                });
            </script>       
<table id="tableHorizontalWrapper" class="table table-striped table-bordered table-sm text-center" cellspacing="0"width="50%">
            <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Lastst Name</td>
                <td>City Name</td>
                <td>Email</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->first_name); ?></td>
                <td><?php echo e($user->last_name); ?></td>
                <td><?php echo e($user->city_name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><a href = 'edit/<?php echo e($user->id); ?>'>Edit</a></td>
                <td><a onClick="return confirm('Are you sure you want to delete?')" href = 'delete/<?php echo e($user->id); ?>'>Delete</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>
</html><?php /**PATH C:\Fran\lrvl_prjct\lrvl_prjct\resources\views/stud_edit_view.blade.php ENDPATH**/ ?>