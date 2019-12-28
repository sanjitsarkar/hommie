<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col s12 m8 offset-m2 card-panel z-depth-4">
<h4 class="grey-text center">Booked Beds - <?php echo e($room->hostel_name); ?> : <?php echo e($room->room_no); ?></h4>


        <div class="container ">


<div class="row">

    <?php for($i = 1; $i < $room->booked_bed+1; $i++): ?>
    <div class="col m2 l1 s3" style=" margin:10px 10px; ">
<a href="<?php echo e(route('bed.edit',['hostel_name'=>str_slug($room->hostel_name),'id'=>$room->room_no,'bed_no'=>$i])); ?>" class="btn orange white-text flow-text" style=" margin:0px 10px; display:block; text-align:center;"><?php echo e($i); ?></a>
    </div>
<?php endfor; ?>

</div>

</div>

</div>
</div>
<?php echo $__env->make('includes.floating', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>