<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col s12 m8 offset-m2 card-panel z-depth-4">
<h4 class="grey-text center">Booked Beds: <?php echo e($host->name); ?> : <?php echo e($room_no); ?></h4>
    <table class="stripped responsive-table show-on-large">
        <thead>
            <tr>
                <th>Bed No.</th>
                <th>Name</th>
                <th>Check-In Date</th>
                <th>Check-Out Date</th>
                <th>College</th>
                <th>Stream</th>
                <th>Branch</th>
                <th>Semester</th>
                <th>Age</th>

                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>


            </tr>
        </thead>
        <tbody>
                <?php $__currentLoopData = $beds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>

        <td><?php echo e($bed->bed_no); ?></td>
    <td><?php echo e($bed->student_name); ?></td>
    <td><?php echo e($bed->check_in_date); ?></td>
    <td><?php echo e($bed->check_out_date); ?></td>
    <td><?php echo e($bed->college_name); ?></td>
    <td><?php echo e($bed->stream); ?></td>
    <td><?php echo e($bed->branch); ?></td>
    <td><?php echo e($bed->sem); ?></td>
    <td><?php echo e($bed->age); ?></td>

    <td> <img src="<?php echo e(asset($bed->img)); ?>" alt="" width="50px" height="50px"> </td>
    <td><a href="<?php echo e(route('bed.edit',['hostel_name'=>$host->slug,'id'=>$room_no,'bed_no'=>$bed->bed_no])); ?>" ><i class="material-icons">edit</a></td>

    <td><a href="<?php echo e(route('bed.delete',['hostel_name'=>$host->slug,'id'=>$room_no,'bed_no'=>$bed->bed_no])); ?>" > <i class="material-icons">delete</i> </a></td>


</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</div>
<?php echo $__env->make('includes.floating', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>