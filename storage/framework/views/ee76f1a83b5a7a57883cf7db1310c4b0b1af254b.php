<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col s12 m8 offset-m2 card-panel z-depth-4">
<h4 class="grey-text center">Hostels</h4>
    <table class="stripped responsive-table show-on-large">
            <?php if($hostels->count()>0): ?>
        <thead>
            <tr>
                <th>Name</th>
                <th>Rooms</th>
                <th>Location</th>
                <th>Nearest College</th>
                <th>Image</th>
                <th>Description</th>
                <th class="hide-on-small-and-down">Edit</th>
                <th class="hide-on-small-and-down">Delete</th>

            </tr>
        </thead>
        <tbody>

                <?php $__currentLoopData = $hostels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $host): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>


    <td> <a href="<?php echo e(route('room.index',['id'=>$host->id])); ?>"> <?php echo e($host->name); ?></a></td>
    <td><a href="<?php echo e(route('room.display',['host'=>$host->name])); ?>" class="btn blue white-text btn-floating"><?php echo e($host->total); ?></a></td>
    <td><?php echo e($host->location); ?></td>
    <td><?php echo e($host->college); ?></td>
    <td> <img src="<?php echo e(asset($host->img)); ?>" alt="" width="50px" height="50px"> </td>
    <td><?php echo e($host->desc); ?></td>
    <td><a href="<?php echo e(route('hostel.edit',['id'=>$host->id])); ?>" > <i class="material-icons">edit</i> </a></td>
    <td><a href="<?php echo e(route('hostel.delete',['id'=>$host->id])); ?>"> <i class="material-icons">delete</i> </a></td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
        <?php else: ?>
<h5 class="center grey-text text-darken-1">No Hostel Added :(</h1>
  <h4 class="center"> <a href="<?php echo e(route('hostel.create')); ?>" class="btn green btn-floating center">
        <i class="material-icons ">add</i>
    </a>
</h4>
<?php endif; ?>
    </table>
</div>
</div>
<?php echo $__env->make('includes.floating', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>