

<?php $__env->startSection('content'); ?>

<div>
	  <div class="card">
            <div class="card-body">
              <h5 class="card-title">Customer Data</h5>
            
              <!-- Pills Tabs -->
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              	 <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Customer Details</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-diagnosis-tab" data-bs-toggle="pill" data-bs-target="#diagnosis" type="button" role="tab" aria-controls="pills-diagnosis" aria-selected="true">Prescription</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-treatment-tab" data-bs-toggle="pill" data-bs-target="#treatment_sit" type="button" role="tab" aria-controls="pills-treatment" aria-selected="false">Treatment Sittings</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-bill-tab" data-bs-toggle="pill" data-bs-target="#bill_history" type="button" role="tab" aria-controls="pills-bill" aria-selected="false">Bill Histories</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabContent">
              	<div class="tab-pane fade show active mt-5" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              	 <div class="table-responsive" style="background-color: #f8f9fa;padding: 10px;">
                 
              	 		<table class="table table-bordered"> 
        						  <tbody>
        							
        								<tr>				 
        								  <td width="50%"> Full Name </td>
        								  <td width="50%"> <?php echo e($user->name); ?> </td>
        								</tr>
        								<tr>				 
        								  <td width="50%"> Phone No. </td>
        								  <td width="50%"> <?php echo e($user->phone); ?> </td>
        								</tr>
        								<tr>
        								  <td width="50%"> Customer ID </td>
        								  <td width="50%"> <?php echo e($user->customer_id); ?> </td>
        								</tr>
        								<tr>
        								  <td width="50%"> Gender </td>
        								  <td width="50%"> <?php echo e($user->sex); ?> </td>
        								</tr>
        								<tr>
        								  <td width="50%"> Address </td>
        								  <td width="50%"> <?php echo e($user->street); ?>,<br><?php echo e($user->area); ?>,<br><?php echo e($user->city); ?>,<br> <?php echo e($user->state); ?>,<br> <?php echo e($user->country); ?>  </td>
        								</tr>
        								<tr>
        								  <td width="50%">Branch </td>
        								  <td width="50%"> <?php echo e($user->branch); ?> </td>
        								</tr>
        							 
        						  </tbody>
						       </table>
                  
                 </div>
                </div>
                <div class="tab-pane fade" id="diagnosis" role="tabpanel" aria-labelledby="diagnosis-tab">
                  <div style="background-color: #f8f9fa;padding: 10px;">
	                   <?php $__currentLoopData = $diagnosis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diagnos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                     
			                <table class="table table-bordered table-striped mt-5"> 
							  <tbody>
								
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
								 
							  </tbody>
							</table>
						 
	                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </div>
                </div>
                <div class="tab-pane fade" id="treatment_sit" role="tabpanel" aria-labelledby="treatment-tab">
                  <div class="table-responsive" style="background-color: #f8f9fa;padding: 10px;">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Date</th> 
                            <th scope="col">Treatment Name</th>
                            <th scope="col">Total Sittings</th>
                            <th scope="col">Current Sittings</th>
                            <th scope="col">Pending Sittings</th>                           
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $sittings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sitting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                              <tr>
                                <td><?php echo e($sitting->date); ?></td> 
                                <td><?php echo e($sitting->treatment_name); ?></td>
                                <td><?php echo e($sitting->total_sittings); ?></td>
                                <td><?php echo e($sitting->current_sittings); ?></td> 
                                <td><?php echo e($sitting->pending_sittings); ?></td>                           
                              </tr> 
                            
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                   </div>
                </div>
                <div class="tab-pane fade" id="bill_history" role="tabpanel" aria-labelledby="bill-tab">
                   <div class="table-responsive" style="background-color: #f8f9fa;padding: 10px;">
                   	   <h6 class="card-title">Service Summary</h6>
                   	   <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Item Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Date</th>                            
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($bill->type == 2): ?>
                              <tr>
                                <td><?php echo e($bill->item_name); ?></td>
                                <td><?php echo e($bill->qty); ?></td>
                                <td><?php echo e($bill->date); ?></td>                           
                              </tr> 
                            <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>

                       <h6 class="card-title">Product Summary</h6>
                   	   <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Item Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Date</th>                            
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($bill->type == 1): ?>
                              <tr>
                                <td><?php echo e($bill->item_name); ?></td>
                                <td><?php echo e($bill->qty); ?></td>
                                <td><?php echo e($bill->date); ?></td>                           
                              </tr> 
                            <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                   </div>
                </div>
              </div><!-- End Pills Tabs -->

            </div>
          </div>
	

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\customerportal\resources\views/admin/userdetails.blade.php ENDPATH**/ ?>