<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col s12 m6 offset-m3 card-panel z-depth-4">
<h4 class="center grey-text">Room Details - <?php echo e($host_name); ?></h4>
<?php if(count($errors)>0): ?>

<ul class="collection">
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="collection-item red white-text ">
<?php echo e($error); ?>

</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
<form action="<?php echo e(route('room.add')); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="host_name" value="<?php echo e($host_name); ?>">
    <input type="hidden" name="slug" value="<?php echo e(str_slug($host_name)); ?>">
  <div class="input-field">
    <input type="text" id="room" name="room" value="<?php echo e($id); ?>" >
    <label for="room">Room No.</label>
  </div>
  <div class="input-field">
          <input type="number" id="bed" name="bed" value="<?php echo e(old('bed')); ?>">
          <label for="bed">No. Of Bed:</label>
        </div>

            <div class="input-field">
              <input type="number" id="booked" name="booked" value="<?php echo e(old('booked')); ?>">
              <label for="booked">Total No. Of Booked Bed:</label>
            </div>

            <div class="input-field">
            <select name="room_type" id="room_type">


                <option value="AC">AC</option>
                <option value="Non AC">Non AC</option>
                <option value="Attached Bathroom">Attached Bathroom</option>

                </select>
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