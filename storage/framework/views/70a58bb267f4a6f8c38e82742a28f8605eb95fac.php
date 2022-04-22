

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-html5-2.0.1/b-print-2.0.1/date-1.1.1/r-2.2.9/sc-2.0.5/sb-1.3.0/sp-1.4.0/sl-1.3.3/datatables.min.css"/>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="mb-3">
	<h5>Logged in Users</h5>
</div>

<div class="card">
	
  <div class="card-body" id="reftable">
	
        <table class="table table-bordered" id="logtable">
            <thead>
                <tr>
                     
                    <th scope="col">Logged in User</th>                    
                    <th scope="col">IP Address</th>
                    <th scope="col">Last Activity</th>                                                             
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $sessions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $session): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                   <tr>                  
                       
                       <?php
                          $user = App\Models\User::where('id',$session->user_id)->first();
                       ?>
                       <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($session->ip_address); ?></td> 
                       <td><?php echo e(date('Y-m-d H:i:s',$session->last_activity)); ?></td>
                                                                 
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
	var table=$('#logtable').DataTable({
		   // order:[1,'desc'],
    	//  dom: 'QBfrtip',
     //   buttons: [
     //        'copy', 'csv', 'excel', 'pdf', 'print'
     //   ],
      // ajax: "data.json"
	});
 //table.ajax.reload(null, false);
   

 // setInterval(function () {
 //      table.ajax.reload();
 //  }, 1200);

 setInterval( function() {
     $("#reftable").load(location.href + " #reftable");
 }, 30000 );
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\customerportal\resources\views/admin/loginuser.blade.php ENDPATH**/ ?>