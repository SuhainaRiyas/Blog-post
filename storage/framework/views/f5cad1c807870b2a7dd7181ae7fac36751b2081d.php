

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-html5-2.0.1/b-print-2.0.1/date-1.1.1/r-2.2.9/sc-2.0.5/sb-1.3.0/sp-1.4.0/sl-1.3.3/datatables.min.css"/>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="mb-3">
	<h5>Log Details</h5>
</div>

<div class="card">
	
  <div class="card-body">
	
        <table class="table table-bordered" id="logtable">
            <thead>
                <tr>
                    <th scope="col">Date</th> 
                    <th scope="col">Module</th>
                    <th scope="col">Count of data</th> 
                    <th scope="col">File</th>
                    <th scope="col">Created At</th>                                           
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                   <tr>
                       <td><?php echo e(date('Y-m-d',strtotime($log->date))); ?></td> 
                       <td><?php echo e($log->module); ?></td>
                       <td><?php echo e($log->count); ?></td>
                       <td> 
                        <?php $host=$_SERVER['HTTP_HOST']; ?>
              			<a href="http://<?php echo e($host); ?>/customerportal/storage/apilog/<?php echo e($log->file_path); ?>" target="_blank"><?php echo e($log->file_path); ?></a>
          			   </td>
          			   <td><?php echo e($log->date); ?></td>                                               
                  </tr> 
                            
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-html5-2.0.1/b-print-2.0.1/date-1.1.1/r-2.2.9/sc-2.0.5/sb-1.3.0/sp-1.4.0/sl-1.3.3/datatables.min.js"></script>


<script type="text/javascript">
	$('#logtable').DataTable({
		order:[1,'desc'],
    	dom: 'QBfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\customerportal\resources\views/admin/apilog.blade.php ENDPATH**/ ?>