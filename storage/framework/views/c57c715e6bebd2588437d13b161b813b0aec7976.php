

<?php $__env->startSection('content'); ?>

<div>
	<h5>Customer Lists</h5>
	 <table class="table table-bordered table-striped mt-5"> 
	 	 <thead>
	 	 	<th>Name</th>
	 	 	<th>Customer Id</th>
	 	 	<th>Phone</th>
	 	 	<th>Branch</th>
	 	 	<th>Action</th>
	 	 </thead>
		 <tbody>
					 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>				 
						  <td> <?php echo e($user->name); ?> </td>
						  <td> <?php echo e($user->customer_id); ?> </td>
						  <td> <?php echo e($user->phone); ?> </td>
						  <td> <?php echo e($user->branch); ?> </td>
						  <td><a href="<?php echo e(route('userdetails',$user->id)); ?>"> <i class="bi bi-eye"></i></a></td>
						</tr>
						
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		 </tbody>
	 </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\customerportal\resources\views/admin/users.blade.php ENDPATH**/ ?>