

<?php $__env->startSection('content'); ?>


  <div class="pagetitle">
      <h1>DIAGNOSIS</h1>
     <!--  <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
            <div class="row d-flex justify-content-center mt-70 mb-70">
    		 <div class="col-md-10 mt-5">
        	  <div class="main-card mb-3 card">
               <div class="card-body">
               
              
               <div class="panel panel-default">

				</div>  
				
				 <table class="table table-bordered table-striped mt-5"> 
				   <tbody>
					 <?php $__currentLoopData = $diagnosis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diagnos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>				 
						  <td width="50%"> Customer ID </td>
						  <td width="50%"> <?php echo e($diagnos->customer_id); ?> </td>
						</tr>
						<tr>				 
						  <td width="50%"> Phone No. </td>
						  <td width="50%"> <?php echo e($diagnos->phone); ?> </td>
						</tr>
						<tr>
						  <td width="50%"> Type of Issue </td>
						  <td width="50%"> <?php echo e($diagnos->issue_type); ?> </td>
						</tr>
						<tr>
						  <td width="50%"> Prescription </td>
						  <td width="50%"> <?php echo e($diagnos->prescription); ?> </td>
						</tr>
						<tr>
						  <td width="50%"> Service </td>
						  <td width="50%"> <?php echo e($diagnos->service); ?>  </td>
						</tr>
						<tr>
						  <td width="50%">Product </td>
						  <td width="50%"> <?php echo e($diagnos->product); ?> </td>
						</tr>
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
				</table>

			

				

				

				</div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
          </div>

        </div>

      
      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\customerportal\resources\views/diagnosis.blade.php ENDPATH**/ ?>