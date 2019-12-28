<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col s12 m6 offset-m3 card-panel z-depth-4">
<h4 class="center grey-text">Bed Details - <?php echo e($bed->hostel_name); ?> : <?php echo e($bed->room_no); ?>  </h4>

<form action="<?php echo e(route('bed.add')); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="bed_no" value="<?php echo e($bed->bed_no); ?>">
    <input type="hidden" name="room_no" value="<?php echo e($bed->room_no); ?>">
    <input type="hidden" name="host_name" value="<?php echo e($bed->hostel_name); ?>">
    <input type="hidden" name="slug" value="<?php echo e(str_slug($bed->hostel_name)); ?>">

  <div class="input-field">
    <input type="text" id="room" name="room" value="<?php echo e($bed->bed_no); ?>" >
    <label for="room">Bed No.</label>
  </div>
  <div class="input-field">
          <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>">
          <label for="name">Student Name</label>
        </div>
        <div class="input-field">
            <input type="text" class="datepicker z-depth-4" id="date" name="check_in_date" value="<?php echo e(old('check_in_date')); ?>">
            <label for="date">Check-In Date</label>
          </div>
          <div class="input-field">
            <input type="text" class="datepicker z-depth-4" id="date" name="check_out_date" value="<?php echo e(old('check_out_date')); ?>">
            <label for="date">Check-Out Date</label>
          </div>
          <div class="input-field">
            <input type="text" id="class" name="college" value="<?php echo e(old('college')); ?>">
            <label for="name">College Name</label>
          </div>

   <div class="file-field input-field">
      <div class="btn">
        <span>Upload</span>

      <input type="file" id="" name="img" value="<?php echo e(old('img')); ?>">

    </div>
    <div class="file-path-wrapper">
      <input type="text" class="file-path" value="<?php echo e(old('img')); ?>">

    </div>

    </div>
    <div class="input-field inline">
        <a class="btn-floating btn red">
            <i class="material-icons add">add</i>
          </a>
    </div>

<div class="input-field">



<div class="input-field center">
    <input type="submit" class="btn blue white-text" value="Submit">

</div>


</form>
</div>
</div>
<?php echo $__env->make('includes.floating', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>