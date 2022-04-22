

<?php $__env->startSection('content'); ?>

<div class="pagetitle">
      <h1>Treatment Sittings</h1>
    
    </div><!-- End Page Title -->
  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             
            <div class="row d-flex justify-content-center mt-70 mb-70">
   
              <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-body">
                     

                      <!-- Table with stripped rows -->
                      <table class="table table-striped">
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
                      <!-- End Table with stripped rows -->

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\customerportal\resources\views/treatment_sittings.blade.php ENDPATH**/ ?>