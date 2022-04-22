<?php $__env->startSection('content'); ?>

 <section class="section profile">
  <?php if($errors->any()): ?>
    <div class="alert alert-danger">
       <ul> 
       <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="text-danger"><?php echo e($error); ?></li>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </ul>
     </div>
   <?php endif; ?>

      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
               <?php if(Auth::user()->profile != "" && Auth::user()->profile != Null): ?>
                  <img src="<?php echo e(asset('users/'.$user->profile)); ?>" alt="Profile" class="rounded-circle">
               <?php else: ?>
                  <img src="<?php echo e(asset('users/avatar.png')); ?>" alt="Profile" class="rounded-circle">
               <?php endif; ?>
              <h2><?php echo e($user->name); ?></h2>
             <!--  <h3>Web Designer</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> -->
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>               

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->name); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Customer ID</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->customer_id); ?></div>
                  </div>

                   <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Branch</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->branch); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->email); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone No.</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->phone); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->sex); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">DOB</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->dob); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Area</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->area); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Street</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->street); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">City</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->city); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">State</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->state); ?></div>
                  </div>

                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->country); ?></div>
                  </div>

                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pincode</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->pincode); ?></div>
                  </div>

                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">Registered Date</div>
                    <div class="col-lg-9 col-md-8"><?php echo e($user->registered_date); ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="post" action="<?php echo e(asset('user/'.$user->id)); ?>" enctype="multipart/form-data">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('PATCH'); ?>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="<?php echo e(asset('users/'.$user->profile)); ?>" alt="Profile">
                        <div class="pt-2">
                         <input type="file" name="profile">
                        </div>
                      </div>
                      <?php $__errorArgs = ['profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    
                   
                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo e($user->phone); ?>">
                      </div>
                    </div>                    

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Area</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="area" type="text" class="form-control" id="area" value="<?php echo e($user->area); ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Street</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="street" type="text" class="form-control" id="street" value="<?php echo e($user->street); ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">City</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="city" type="text" class="form-control" id="city" value="<?php echo e($user->city); ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">State</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="state" type="text" class="form-control" id="state" value="<?php echo e($user->state); ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="<?php echo e($user->country); ?>">
                      </div>
                    </div>

                     <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Pincode</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="pincode" type="text" class="form-control" id="pincode" value="<?php echo e($user->pincode); ?>">
                      </div>
                    </div>


                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="post" action="<?php echo e(asset('user/password/'.$user->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="currentpassword" type="password" class="form-control" id="currentPassword" required>
                      </div>
                      <?php $__errorArgs = ['currentpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword" required>
                      </div>
                      <?php $__errorArgs = ['newpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirmpassword" type="password" class="form-control" id="renewPassword" required>
                      </div>
                      <?php $__errorArgs = ['renewpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\customerportal\resources\views/home.blade.php ENDPATH**/ ?>