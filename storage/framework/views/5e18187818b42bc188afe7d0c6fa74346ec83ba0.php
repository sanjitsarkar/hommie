<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col s12 m6 offset-m3 card-panel z-depth-4">
<h4 class="center grey-text">Add Hostel</h4>
<?php if(count($errors)>0): ?>

<ul class="collection">
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="collection-item red white-text ">
<?php echo e($error); ?>

</li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
<form action="<?php echo e(route('hostel.add')); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

  <div class="input-field">
    <input type="text" id="title" name="name" value="<?php echo e(old('name')); ?>">
    <label for="title">Name</label>
  </div>
  <div class="input-field">
          <input type="text" id="location" name="location" value="<?php echo e(old('location')); ?>">
          <label for="location">Location</label>
        </div>
  <div class="input-field">
              <input type="text" id="near" name="college" value="<?php echo e(old('college')); ?>">
              <label for="near">Nearest College</label>
            </div>
            <div class="input-field">
              <input type="number" id="near" name="total" value="<?php echo e(old('total')); ?>">
              <label for="near">Total Rooms</label>
            </div>


  <div class="input-field">
    <textarea name="desc" id="desc" class="materialize-textarea"><?php echo e(old('desc')); ?></textarea>
    <label for="desc">Description</label>
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


<div class="modal-footer">

<div class="input-field center">
    <input type="submit" class="btn blue white-text" value="Submit">

</div>


</form>
</div>
</div>
<?php echo $__env->make('includes.floating', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>