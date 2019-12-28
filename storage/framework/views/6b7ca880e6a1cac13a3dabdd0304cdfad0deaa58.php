<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col s12 m8 offset-m2 card-panel z-depth-4">
<h4 class="grey-text center">Rooms <?php echo e($host); ?></h4>
    <table class="stripped responsive-table show-on-large">
        <thead>
            <tr>
                <th>Room No:</th>
                <th>Total Bed</th>
                <th>Booked Bed</th>
                <th>Room Type:</th>
                <th>Image</th>
                <th>Edit</th>


            </tr>
        </thead>
        <tbody>
                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>


    <td><?php echo e($room->room_no); ?></td>
    <td><?php echo e($room->total_bed); ?></td>
    <td><a href="<?php echo e(route('bed.index',['hostel_name'=>str_slug($host),'id'=>$room->room_no])); ?>" ><?php echo e($room->booked_bed); ?></a></td>
    <td><?php echo e($room->room_type); ?></td>
    <td> <img src="<?php echo e(asset($room->img)); ?>" alt="" width="50px" height="50px"> </td>

    <td><a href="<?php echo e(route('room.edit',['hostel_name'=>str_slug($host),'id'=>$room->room_no])); ?>" > <i class="material-icons">edit</i> </a></td>


</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</div>
<?php echo $__env->make('includes.floating', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>