

<?php $__env->startSection('content'); ?>

<div class="pagetitle">
      <h1>Prescription & Bill History</h1>
    
    </div><!-- End Page Title -->
  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             
            
                      <h5 class="card-title">Service Summary</h5>

                      <div class="row">
                            <div class="col-md-6 col-sm-12">
                                  <div class="table-responsive">
                                     <table class="table table-bordered table-striped mt-5"> 
                                        <thead>
                                                      <tr>
                                                        <th scope="col">Date</th>                              
                                                        <th scope="col">Service</th>
                                                      </tr>
                                                </thead>
                                       <tbody>
                                        <?php $__currentLoopData = $diagnosis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diagnos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>       
                                         
                                          <td> <?php echo e(date('d-m-Y',strtotime($diagnos->date))); ?> </td>
                                           <?php if($diagnos->issue_type=='Service'): ?>
                                           <td> <?php echo e($diagnos->service); ?>  </td>                                         
                                           <?php endif; ?>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      
                                    </tbody>
                                    </table>
                               </div> 
                            </div>
                            <div class="col-md-6 col-sm-12">
                               <div class="table-responsive">
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
                                            <?php if($bill->type == 'Service'): ?>
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
                      </div>

                      <!-- Table with stripped rows -->
                      
                      <!-- End Table with stripped rows -->

                    
                  
                <div class="row">
                   <h5 class="card-title">Product Summary</h5>
                  <div class="col-md-6 col-sm-12">
                    <div class="table-responsive">
                          <table class="table table-bordered table-striped mt-5"> 
                              <thead>
                                  <tr>
                                      <th scope="col">Date</th>                              
                                      <th scope="col">Product</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <?php $__currentLoopData = $diagnosis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diagnos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                       <td> <?php echo e(date('d-m-Y',strtotime($diagnos->date))); ?> </td>
                                       <?php if($diagnos->issue_type=='Product'): ?>
                                           <td> <?php echo e($diagnos->service); ?>  </td>                                         
                                       <?php endif; ?>
                                    </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      
                               </tbody>
                          </table>
                    </div> 
                  </div>
                  <div class="col-md-6 col-sm-12">
                      <!-- Table with stripped rows -->
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Date</th>                            
                          </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($bill->type == 3): ?>
                              <tr>
                                <td><?php echo e($bill->item_name); ?></td>
                                <td><?php echo e($bill->qty); ?></td>
                                <td><?php echo e($bill->date); ?></td>                           
                              </tr> 
                            <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </tbody>
                      </table>
                      <!-- End Table with stripped rows -->
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\customerportal\resources\views/comparison.blade.php ENDPATH**/ ?>